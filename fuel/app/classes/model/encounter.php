<?php
use Orm\Model;

class Model_Encounter extends Model
{
    protected static $_table_name = 'encounter_table';

	protected static $_properties = array(
		'id',
		'encid',
		'title',
		'starttime',
		'endtime',
		'duration',
		'damage',
		'encdps',
		'zone',
		'kills',
		'deaths',
	);


	public static function validate($factory)
	{
		$val = Validation::forge($factory);
		$val->add_field('encid', 'Encid', 'required|max_length[8]');
		$val->add_field('title', 'Title', 'required|max_length[64]');
		$val->add_field('starttime', 'Starttime', 'required');
		$val->add_field('endtime', 'Endtime', 'required');
		$val->add_field('duration', 'Duration', 'required|valid_string[numeric]');
		$val->add_field('damage', 'Damage', 'required');
		$val->add_field('encdps', 'Encdps', 'required');
		$val->add_field('zone', 'Zone', 'required|max_length[64]');
		$val->add_field('kills', 'Kills', 'required|valid_string[numeric]');
		$val->add_field('deaths', 'Deaths', 'required|valid_string[numeric]');

		return $val;
	}

}
