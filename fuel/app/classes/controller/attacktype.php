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
		is_null($encid) and Response::redirect('attacktype');

        $where = array('encid' => $encid);

        if ( ! $attacker   = Input::param('attacker'))
        {
            $data['name'] = $attacker;
            $where .= array('attacker' => $attacker);

            if ( ! $swingtype  = Input::param('swingtype') and ! $swingtype2 = Input::param('swingtype2'))
            {
                $where .= array('swingtype' => $swingtype);
                $where .= array('swingtype2' => $swingtype2);
            }
            elseif ( ! $swingtype  = Input::param('swingtype'))
            {
                $where .= array('swingtype' => $swingtype);
            }
        }

        if ( ! $victim= Input::param('victim'))
        {
            $data['name'] = $victim;
            $where .= array('victim' => $victim);

            if ( ! $swingtype  = Input::param('swingtype') and ! $swingtype2 = Input::param('swingtype2'))
            {
                $where .= array('swingtype' => $swingtype);
                $where .= array('swingtype2' => $swingtype2);
            }
            elseif ( ! $swingtype  = Input::param('swingtype'))
            {
                $where .= array('swingtype' => $swingtype);
            }
        }

        if ( ! $data['attacktype'] = Model_Attacktype::find('all', array(
            'where' => $where,
            'order_by' => array('type' => 'asc'),
        )))
		{
			Session::set_flash('error', 'Could not find attacktype '.$encid);
			Response::redirect('damagetype/view/'.$encid.'/'.$attacker.$victim);
		}

        $this->template->title = Model_Encounter::find('first', array(
            'select' => array('zone'),
            'where' => array('encid' => $encid),
        ))->zone;
		$this->template->content = View::forge('attacktype/view', $data);

	}

}
