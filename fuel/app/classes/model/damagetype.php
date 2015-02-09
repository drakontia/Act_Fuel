<?php
use Orm\Model;

class Model_Damagetype extends Model
{
    protected static $_table_name = 'damagetype_table';

	protected static $_properties = array(
		'id',
		'encid',
		'combatant',
		'grouping',
		'type',
		'starttime',
		'endtime',
		'duration',
		'damage',
		'encdps',
		'chardps',
		'dps',
		'average',
		'median',
		'minhit',
		'maxhit',
		'hits',
		'crithits',
		'blocked',
		'misses',
		'swings',
		'tohit',
		'averagedelay',
		'critperc',
		'parrypct',
		'blockpct',
		'overheal',
	);


	public static function validate($factory)
	{
		$val = Validation::forge($factory);
		$val->add_field('encid', 'Encid', 'required|max_length[8]');
		$val->add_field('combatant', 'Combatant', 'required|max_length[64]');
		$val->add_field('grouping', 'Grouping', 'required|max_length[92]');
		$val->add_field('type', 'Type', 'required|max_length[64]');
		$val->add_field('starttime', 'Starttime', 'required');
		$val->add_field('endtime', 'Endtime', 'required');
		$val->add_field('duration', 'Duration', 'required|valid_string[numeric]');
		$val->add_field('damage', 'Damage', 'required');
		$val->add_field('encdps', 'Encdps', 'required');
		$val->add_field('chardps', 'Chardps', 'required');
		$val->add_field('dps', 'Dps', 'required');
		$val->add_field('average', 'Average', 'required');
		$val->add_field('median', 'Median', 'required|valid_string[numeric]');
		$val->add_field('minhit', 'Minhit', 'required|valid_string[numeric]');
		$val->add_field('maxhit', 'Maxhit', 'required|valid_string[numeric]');
		$val->add_field('hits', 'Hits', 'required|valid_string[numeric]');
		$val->add_field('crithits', 'Crithits', 'required|valid_string[numeric]');
		$val->add_field('blocked', 'Blocked', 'required|valid_string[numeric]');
		$val->add_field('misses', 'Misses', 'required|valid_string[numeric]');
		$val->add_field('swings', 'Swings', 'required|valid_string[numeric]');
		$val->add_field('tohit', 'Tohit', 'required');
		$val->add_field('averagedelay', 'Averagedelay', 'required');
		$val->add_field('critperc', 'Critperc', 'required|max_length[8]');
		$val->add_field('parrypct', 'Parrypct', 'required|max_length[8]');
		$val->add_field('blockpct', 'Blockpct', 'required|max_length[8]');
		$val->add_field('overheal', 'Overheal', 'required|valid_string[numeric]');

		return $val;
	}

}
