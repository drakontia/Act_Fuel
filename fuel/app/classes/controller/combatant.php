<?php
class Controller_Combatant extends Controller_Hybrid
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
    $this->template->script= array('combatant.js', array(), 'combatant', false);
    $this->template->content = View::forge('combatant/index', $data);

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

        if ( ! $data['combatant'] = Model_Combatant::find('all', array(
            'where' => array('encid' => $encid),
            'order_by' => array('job' => 'desc'),
        )))
		{
			Session::set_flash('error', 'Could not find combatant #'.$id);
			Response::redirect_back('encounter/index');
		}

        $this->template->title = $data['encounter']->title;
        $this->template->script = array('bufftimeline.js',  array(), 'combatant', false);
		$this->template->content = View::forge('combatant/view', $data);

	}

	protected $format = 'json';

	public function get_lists($encid = null)
	{

		is_null($encid) and Response::redirect_back('combatant/index');

        if ( ! $combatants = Model_Combatant::find('all', array(
            'select' => array('name', 'encid', 'job'),
            'where' => array('encid' => $encid),
        )))
        {
			Session::set_flash('error', 'Could not find combatant #'.$encid);
			Response::redirect_back('combatant/index');
        }

        return $this->response($combatants);
    }

}
