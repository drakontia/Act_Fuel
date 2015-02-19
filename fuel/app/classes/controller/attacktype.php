<?php
class Controller_Attacktype extends Controller_Template
{

	public function action_index()
	{
		$data['attacktype'] = Model_Attacktype::find('all');
		$this->template->title = "Attacktype";
		$this->template->content = View::forge('attacktype/index', $data);

	}

	public function action_view($encid = null)
	{
		is_null($encid) and Response::redirect('combatant/');
        $attacker   = Input::param('attacker');
        $victim = Input::param('victim');
        $swingtype = Input::param('swingtype');
        $swingtype2 = Input::param('swingtype2');
        $swingtype3 = Input::param('swingtype3');

        $where[] = array('encid' => $encid);

        if (isset($attacker))
        {
            $data['name'] = $attacker;
            $where[] = array('attacker' => $attacker);
        }
        elseif (isset($victim))
        {
            $data['name'] = $victim;
            $where[] = array('victim' => $victim);
        }
        else {
            Response::redirect('encounter/index');
        }

        // swingtype '100' is special magic number. this means skill and healed and buff.
        if (isset($swingtype) and isset($swingtype2) and isset($swingtype3))
        {
            $data['swingtype2'] = $swingtype2;
            $data['swingtype3'] = $swingtype3;
            if (
                ($swingtype == 2 or $swingtype == 10 or $swingtype == 21)
                or ($swingtype2 == 2 or $swingtype2 == 10 or $swingtype2 == 21)
                or ($swingtype3 == 2 or $swingtype3 == 10 or $swingtype3 == 21)
            )
            {
                $where[] = array('swingtype', 'in', array($swingtype, $swingtype2, $swingtype3, 100));
            }
            else
            {
                $where[] = array('swingtype', 'in', array($swingtype, $swingtype2, $swingtype3));
            }
        }
        elseif (isset($swingtype) and isset($swingtype2))
        {
            $data['swingtype2'] = $swingtype2;
            if (
                ($swingtype == 2 or $swingtype == 10 or $swingtype == 21)
                or ($swingtype2 == 2 or $swingtype2 == 10 or $swingtype2 == 21)
            )
            {
                $where[] = array('swingtype', 'in', array($swingtype, $swingtype2, 100));
            }
            else
            {
                $where[] = array('swingtype', 'in', array($swingtype, $swingtype2));
            }
        }
        elseif ( isset($swingtype))
        {
            if ($swingtype == 2 or $swingtype == 10 or $swingtype == 21)
            {
                $where[] = array('swingtype', 'in', array($swingtype, 100));
            }
            else
            {
                $where[] = array('swingtype' => $swingtype);
            }
        }

        if ( ! $data['attacktype'] = Model_Attacktype::find('all', array(
            'where' => $where,
            'order_by' => array('type' => 'asc'),
        )))
		{
			Session::set_flash('error', 'Could not find attacktype '.$encid);
			Response::redirect_back('damagetype/view/'.$encid.'?name='.urlencode($attacker).urlencode($victim));
		}

        $this->template->title = Model_Damagetype::find('first', array(
            'select' => array('type'),
            'where' => array(
                array('grouping', 'like', 'swingtype2='.$swingtype2),
                'or' => array('grouping', 'like', 'swingtype='.$swingtype),
            ),
        ));
		$this->template->content = View::forge('attacktype/view', $data);

	}

}
