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
		is_null($encid) and Response::redirect('swing');

        $attacker   = Input::param('attacker');
        $victim = Input::param('victim');
        $swingtype = Input::param('swingtype');
        $swingtype2 = Input::param('swingtype2');

        $where[] = array('encid' => $encid);

		if ( ! $data['swing'] = Model_Swing::find($id))
		{
			Session::set_flash('error', 'Could not find swing #'.$id);
			Response::redirect('swing');
		}

		$this->template->title = "Swing";
		$this->template->content = View::forge('swing/view', $data);

	}


}
