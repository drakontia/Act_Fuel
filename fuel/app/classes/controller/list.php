<?php
class Controller_List extends Controller_Rest
{
	protected $format = 'json';

	public function get_combatants($encid = null)
	{

		is_null($encid) and Response::redirect_back('encounter/index');

        if ( $combatants = Model_Combatant::find('all', array(
            'select' => array('name', 'encid'),
            'where' => array('encid' => $encid),
        )))
        {
            return $this->response($combatants);
        }

    }

}
