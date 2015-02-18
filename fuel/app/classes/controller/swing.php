<?php
class Controller_Swing extends Controller_Template
{

	public function action_index()
	{
		$data['swings'] = Model_Swing::find('all');
		$this->template->title = "Swings";
		$this->template->content = View::forge('swing/index', $data);

	}

	public function action_view($encid = null)
	{
		is_null($encid) and Response::redirect('encounter/index');

        $attacker   = Input::param('attacker');
        $victim = Input::param('victim');
        $swingtype = Input::param('swingtype');
        $swingtype2 = Input::param('swingtype2');
        $attacktype = Input::param('attacktype');

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
            $where[] = array('attacktype' => $attacktype);
        }

        if ( ! $data['swing'] = Model_Swing::find('all', array(
            'where' => $where,
            'order_by' => array('type' => 'asc'),
        )))
		{
			Session::set_flash('error', 'Could not find swing #'.$id);
			Response::redirect('swing');
		}

		$this->template->title = "Swing";
		$this->template->content = View::forge('swing/view', $data);

	}


}
