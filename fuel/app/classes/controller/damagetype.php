<?php
class Controller_Damagetype extends Controller_Template
{

	public function action_index()
	{
		$data['damagetype'] = Model_Damagetype::find('all');
		$this->template->title = "Damagetype";
		$this->template->content = View::forge('damagetype/index', $data);

	}

	public function action_view($encid = null)
	{
		is_null($encid) and Response::redirect('combatant/view/'.$encid);
        $name = Input::param('name');

        $data['name'] = html_entity_decode($name);
        if ( ! $data['damagetype'] = Model_Damagetype::find('all', array(
                'where' => array(
                    array('encid' => $encid),
                    array('combatant' => $name),
                ),
                'order_by' => array('grouping' => 'asc'),
        )))
		{
			Session::set_flash('error', 'Could not find damagetype '.$name);
			Response::redirect('combatant/view/'.$encid);
		};

        $this->template->title = Model_Encounter::find('first', array(
            'select' => array('zone'),
            'where' => array('encid' => $encid),
        ))->zone;
		$this->template->content = View::forge('damagetype/view', $data);

	}

}
