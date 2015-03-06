<?php
class Controller_List extends Controller_Rest
{
	protected $format = 'json';

	public function get_combatants($encid = null)
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
