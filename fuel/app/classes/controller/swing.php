<?php
class Controller_Swing extends Controller_Template
{

	public function action_index($encid = null)
	{
		is_null($encid) and Response::redirect_back('encounter/index');

		$data['swings'] = Model_Swing::find('all');
		$this->template->title = "Compare swings";
		$this->template->content = View::forge('swing/index', $data);

	}

	public function action_view($encid = null)
	{
		is_null($encid) and Response::redirect_back('encounter/index');

        $attacker    = Input::param('attacker');
        $victim      = Input::param('victim');
        $swingtype   = Input::param('swingtype');
        $swingtype2  = Input::param('swingtype2');
        $attacktype  = Input::param('attacktype');

        $where[] = array('encid' => $encid);

        if (isset($attacker))
        {
            $data['name'] = urldecode($attacker);
            $where[] = array('attacker' => urldecode($attacker));
        }
        elseif (isset($victim))
        {
            $data['name'] = urldecode($victim);
            $where[] = array('victim' => urldecode($victim));
        }
        else {
            Response::redirect('encounter/index');
        }

        if (isset($swingtype) and isset($swingtype2))
        {
            $where[] = array(
                array('swingtype' => $swingtype),
                'or' => array('swingtype' => $swingtype2),
            );
        }
        elseif ( isset($swingtype))
        {
            $where[] = array('swingtype' => $swingtype);
        }

        if (isset($attacktype))
        {
            $where[] = array('attacktype' => urldecode($attacktype));
        }

        if ( ! $data['swing'] = Model_Swing::find('all', array(
            'where' => $where,
            'select' => array(array('damagestring' => false), array('dmgreduced' => false)),
        )))
		{
			Session::set_flash('error', 'Could not find swing #'.$encid);
			Response::redirect_back('attacktype/view/'.$encid);
		}

		$this->template->title = "Swing";
		$this->template->content = View::forge('swing/view', $data);

	}

	public function action_flow($encid = null)
	{
		is_null($encid) and Response::redirect_back('encounter/index');

        $attacker = Input::param('attacker');
        $nobuff     = Input::param('nobuff');

        $query = DB::select('stime', 'attacker', 'attacktype', 'damagetype', 'swingtype', 'special', 'dmgadjust')
            ->from('swing_table')
            ->distinct(true)
            ->where(array('encid' => $encid));

        if (isset($attacker))
        {
            $data['name'] = urldecode($attacker);
            $query = $query->where('attacker', 'like', urldecode($attacker));
        }
        else {
            Response::redirect_back('encounter/index');
        }

        if (isset($nobuff) and $nobuff == 1)
        {
            $query = $query->where('swingtype', 'not in', array(1,11,20,21));
        }
        else
        {
            $query = $query->where('swingtype', 'not in', array(1,11,20));
        }

        if ( ! $data['swing'] = $query->execute()->as_array() )
		{
			Session::set_flash('error', 'Could not find swing #'.$encid);
			Response::redirect_back('attacktype/view/'.$encid);
		}

		$this->template->title = "Swing flow";
		$this->template->content = View::forge('swing/flow', $data);

	}

	public function action_compare()
	{
        $encountera = Input::param('encountera');
        $titlea = Model_Encounter::find('first', array(
            'select' => array('starttime', 'zone'),
            'where' => array('encid' => $encountera),
        ));
        $data['encountera'] = $titlea->zone;
        $data['starttimea'] = $titlea->starttime;
        $combatanta = Input::param('combatanta');
        $data['combatanta'] = $combatanta;
        $encounterb = Input::param('encounterb');
        $titleb = Model_Encounter::find('first', array(
            'select' => array('starttime', 'zone'),
            'where' => array('encid' => $encounterb),
        ));
        $data['encounterb'] = $titleb->zone;
        $data['starttimeb'] = $titleb->starttime;
        $combatantb = Input::param('combatantb');
        $data['combatantb'] = $combatantb;

        $queryA = DB::select('stime', 'attacker', 'attacktype', 'swingtype', 'special', 'dmgadjust')
            ->from('swing_table')
            ->distinct(true)
            ->where(array('encid' => $encountera))
            ->where(array('attacker' => $combatanta))
            ->where('attacktype', 'not like', '鼓舞')
            ->where('attacktype', 'not like', '%：効果')
            ->where('swingtype', 'not in', array(1,11,20));

        $queryB = DB::select('stime', 'attacker', 'attacktype', 'swingtype', 'special', 'dmgadjust')
            ->from('swing_table')
            ->distinct(true)
            ->where(array('encid' => $encounterb))
            ->where(array('attacker' => $combatantb))
            ->where('attacktype', 'not like', '鼓舞')
            ->where('attacktype', 'not like', '%：効果')
            ->where('swingtype', 'not in', array(1,11,20));

        if ( ! $data['swingA'] = $queryA->execute()->as_array() )
		{
			Session::set_flash('error', 'Could not find swing of'.$encountera);
			Response::redirect_back('combatant/index');
		}

        if ( ! $data['swingB'] = $queryB->execute()->as_array() )
		{
			Session::set_flash('error', 'Could not find swing of'.$encounterb);
			Response::redirect_back('combatant/index');
		}

		$this->template->title = "Swing Compare";
		$this->template->content = View::forge('swing/compare', $data);
    }
}
