<?php
use Orm\Model;

class Model_Skill extends Model
{

	protected static $_properties = array(
		'id',
		'swingtype',
		'name',
		'damagetype',
		'duration',
		'recast'
	);


	public static function validate($factory)
	{
		$val = Validation::forge($factory);
		$val->add_field('swingtype', 'Swingtype', 'required');
		$val->add_field('name', 'Name', 'required|max_length[64]');
		$val->add_field('damagetype', 'Damagetype', 'max_length[64]');
		$val->add_field('duration', 'Duration');
		$val->add_field('recst', 'Recast');

		return $val;
	}

}
