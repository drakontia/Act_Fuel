<?php
use Orm\Model;

class Model_Current_Table extends Model
{
	protected static $_properties = array(
		'id',
		'encid',
		'ally',
		'name',
		'starttime',
		'endtime',
		'duration',
		'damage',
		'damageperc',
		'kills',
		'healed',
		'healedperc',
		'critheals',
		'heals',
		'curedispels',
		'powerdrain',
		'powerreplenish',
		'dps',
		'encdps',
		'enchps',
		'hits',
		'crithits',
		'blocked',
		'misses',
		'swings',
		'healstaken',
		'damagetaken',
		'deaths',
		'tohit',
		'critdamperc',
		'crithealperc',
		'threatstr',
		'threatdelta',
		'job',
		'parrypct',
		'blockpct',
		'inctohit',
		'overhealpct',
	);


	public static function validate($factory)
	{
		$val = Validation::forge($factory);
		$val->add_field('encid', 'Encid', 'required|max_length[8]');
		$val->add_field('ally', 'Ally', 'required|max_length[1]');
		$val->add_field('name', 'Name', 'required|max_length[64]');
		$val->add_field('starttime', 'Starttime', 'required');
		$val->add_field('endtime', 'Endtime', 'required');
		$val->add_field('duration', 'Duration', 'required|valid_string[numeric]');
		$val->add_field('damage', 'Damage', 'required');
		$val->add_field('damageperc', 'Damageperc', 'required|max_length[4]');
		$val->add_field('kills', 'Kills', 'required|valid_string[numeric]');
		$val->add_field('healed', 'Healed', 'required');
		$val->add_field('healedperc', 'Healedperc', 'required|max_length[4]');
		$val->add_field('critheals', 'Critheals', 'required|valid_string[numeric]');
		$val->add_field('heals', 'Heals', 'required|valid_string[numeric]');
		$val->add_field('curedispels', 'Curedispels', 'required|valid_string[numeric]');
		$val->add_field('powerdrain', 'Powerdrain', 'required');
		$val->add_field('powerreplenish', 'Powerreplenish', 'required');
		$val->add_field('dps', 'Dps', 'required');
		$val->add_field('encdps', 'Encdps', 'required');
		$val->add_field('enchps', 'Enchps', 'required');
		$val->add_field('hits', 'Hits', 'required|valid_string[numeric]');
		$val->add_field('crithits', 'Crithits', 'required|valid_string[numeric]');
		$val->add_field('blocked', 'Blocked', 'required|valid_string[numeric]');
		$val->add_field('misses', 'Misses', 'required|valid_string[numeric]');
		$val->add_field('swings', 'Swings', 'required|valid_string[numeric]');
		$val->add_field('healstaken', 'Healstaken', 'required');
		$val->add_field('damagetaken', 'Damagetaken', 'required');
		$val->add_field('deaths', 'Deaths', 'required|valid_string[numeric]');
		$val->add_field('tohit', 'Tohit', 'required');
		$val->add_field('critdamperc', 'Critdamperc', 'required|max_length[8]');
		$val->add_field('crithealperc', 'Crithealperc', 'required|max_length[8]');
		$val->add_field('threatstr', 'Threatstr', 'required|max_length[32]');
		$val->add_field('threatdelta', 'Threatdelta', 'required|valid_string[numeric]');
		$val->add_field('job', 'Job', 'required|max_length[8]');
		$val->add_field('parrypct', 'Parrypct', 'required|max_length[8]');
		$val->add_field('blockpct', 'Blockpct', 'required|max_length[8]');
		$val->add_field('inctohit', 'Inctohit', 'required|max_length[8]');
		$val->add_field('overhealpct', 'Overhealpct', 'required|max_length[8]');

		return $val;
	}

}
