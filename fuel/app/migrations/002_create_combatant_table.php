<?php

namespace Fuel\Migrations;

class Create_combatant_table
{
	public function up()
	{
		\DBUtil::create_table('combatant_table', array(
			'id' => array('constraint' => 11, 'type' => 'int', 'auto_increment' => true, 'unsigned' => true),
			'encid' => array('constraint' => 8, 'type' => 'char'),
			'ally' => array('constraint' => 1, 'type' => 'char'),
			'name' => array('constraint' => 64, 'type' => 'varchar'),
			'starttime' => array('type' => 'timestamp'),
			'endtime' => array('type' => 'timestamp'),
			'duration' => array('constraint' => 11, 'type' => 'int'),
			'damage' => array('constraint' => 20, 'type' => 'bigint'),
			'damageperc' => array('constraint' => 4, 'type' => 'varchar'),
			'kills' => array('constraint' => 11, 'type' => 'int'),
			'healed' => array('constraint' => 20, 'type' => 'bigint'),
			'healedperc' => array('constraint' => 4, 'type' => 'varchar'),
			'critheals' => array('constraint' => 11, 'type' => 'int'),
			'heals' => array('constraint' => 11, 'type' => 'int'),
			'curedispels' => array('constraint' => 11, 'type' => 'int'),
			'powerdrain' => array('constraint' => 20, 'type' => 'bigint'),
			'powerreplenish' => array('constraint' => 20, 'type' => 'bigint'),
			'dps' => array('type' => 'double'),
			'encdps' => array('type' => 'double'),
			'enchps' => array('type' => 'double'),
			'hits' => array('constraint' => 11, 'type' => 'int'),
			'crithits' => array('constraint' => 11, 'type' => 'int'),
			'blocked' => array('constraint' => 11, 'type' => 'int'),
			'misses' => array('constraint' => 11, 'type' => 'int'),
			'swings' => array('constraint' => 11, 'type' => 'int'),
			'healstaken' => array('constraint' => 20, 'type' => 'bigint'),
			'damagetaken' => array('constraint' => 20, 'type' => 'bigint'),
			'deaths' => array('constraint' => 11, 'type' => 'int'),
			'tohit' => array('type' => 'float'),
			'critdamperc' => array('constraint' => 8, 'type' => 'varchar'),
			'crithealperc' => array('constraint' => 8, 'type' => 'varchar'),
			'threatstr' => array('constraint' => 32, 'type' => 'varchar'),
			'threatdelta' => array('constraint' => 11, 'type' => 'int'),
			'job' => array('constraint' => 8, 'type' => 'varchar'),
			'parrypct' => array('constraint' => 8, 'type' => 'varchar'),
			'blockpct' => array('constraint' => 8, 'type' => 'varchar'),
			'inctohit' => array('constraint' => 8, 'type' => 'varchar'),
			'overhealpct' => array('constraint' => 8, 'type' => 'varchar'),

		), array('id'));
	}

	public function down()
	{
		\DBUtil::drop_table('combatant_table');
	}
}
