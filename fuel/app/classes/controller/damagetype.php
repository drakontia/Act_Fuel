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
        if ( is_null($encid) or
             ( ! $data['encounter'] = Model_Encounter::find('first', array(
               'where' => array('encid' => $encid),
        ))))
        {
			Session::set_flash('error', 'Could not find encounter #'.$encid);
			Response::redirect_back('encounter/index');
		}

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
			Response::redirect_back('combatant/view/'.$encid);
		};

        $this->template->title = $data['encounter']->title;
		$this->template->content = View::forge('damagetype/view', $data);

	}

}
