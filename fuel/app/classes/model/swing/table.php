<?php
use Orm\Model;

class Model_Swing_Table extends Model
{
	protected static $_properties = array(
		'id',
		'encid',
		'stime',
		'attacker',
		'swingtype',
		'attacktype',
		'damagetype',
		'victim',
		'damage',
		'damagestring',
		'critical',
		'special',
		'dmgadjust',
		'dmgreduced',
		'overheal',
	);


	public static function validate($factory)
	{
		$val = Validation::forge($factory);
		$val->add_field('encid', 'Encid', 'required|max_length[8]');
		$val->add_field('stime', 'Stime', 'required');
		$val->add_field('attacker', 'Attacker', 'required|max_length[64]');
		$val->add_field('swingtype', 'Swingtype', 'required');
		$val->add_field('attacktype', 'Attacktype', 'required|max_length[64]');
		$val->add_field('damagetype', 'Damagetype', 'required|max_length[64]');
		$val->add_field('victim', 'Victim', 'required|max_length[64]');
		$val->add_field('damage', 'Damage', 'required|valid_string[numeric]');
		$val->add_field('damagestring', 'Damagestring', 'required|max_length[128]');
		$val->add_field('critical', 'Critical', 'required|max_length[1]');
		$val->add_field('special', 'Special', 'required|max_length[64]');
		$val->add_field('dmgadjust', 'Dmgadjust', 'required|max_length[8]');
		$val->add_field('dmgreduced', 'Dmgreduced', 'required|valid_string[numeric]');
		$val->add_field('overheal', 'Overheal', 'required|valid_string[numeric]');

		return $val;
	}

}
