<?php
class Controller_Combatant extends Controller_Template
{

	public function action_index()
	{
        if ( ! $data['encounter'] = Model_Encounter::find('all', array(
            'select' => array('encid', 'title', 'starttime'),
            'order_by' => array('starttime' => 'desc'),
        )))
		{
			Session::set_flash('error', 'Could not find combatant');
			Response::redirect_back('encounter');
		}

        $this->template->title = 'Compare combatants';
		$this->template->content = View::forge('combatant/index', $data);

	}

	public function action_view($encid = null)
	{
		is_null($encid) and Response::redirect('encounter/index');

        $data['encid'] = $encid;

        if ( ! $data['combatant'] = Model_Combatant::find('all', array(
            'where' => array('encid' => $encid),
            'order_by' => array('job' => 'desc'),
        )))
		{
			Session::set_flash('error', 'Could not find combatant #'.$id);
			Response::redirect_back('encounter/index');
		}

        $this->template->title = Model_Encounter::find('first', array(
            'select' => array('zone'),
            'where' => array('encid' => $encid),
        ))->zone;
		$this->template->content = View::forge('combatant/view', $data);

	}

}
