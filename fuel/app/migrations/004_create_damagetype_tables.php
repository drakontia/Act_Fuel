<?php

namespace Fuel\Migrations;

class Create_damagetype_tables
{
	public function up()
	{
		\DBUtil::create_table('damagetype_tables', array(
			'id' => array('constraint' => 11, 'type' => 'int', 'auto_increment' => true, 'unsigned' => true),
			'encid' => array('constraint' => 8, 'type' => 'char'),
			'combatant' => array('constraint' => 64, 'type' => 'varchar'),
			'grouping' => array('constraint' => 92, 'type' => 'varchar'),
			'type' => array('constraint' => 64, 'type' => 'varchar'),
			'starttime' => array('type' => 'timestamp'),
			'endtime' => array('type' => 'timestamp'),
			'duration' => array('constraint' => 11, 'type' => 'int'),
			'damage' => array('constraint' => 20, 'type' => 'bigint'),
			'encdps' => array('type' => 'double'),
			'chardps' => array('type' => 'double'),
			'dps' => array('type' => 'double'),
			'average' => array('type' => 'float'),
			'median' => array('constraint' => 11, 'type' => 'int'),
			'minhit' => array('constraint' => 11, 'type' => 'int'),
			'maxhit' => array('constraint' => 11, 'type' => 'int'),
			'hits' => array('constraint' => 11, 'type' => 'int'),
			'crithits' => array('constraint' => 11, 'type' => 'int'),
			'blocked' => array('constraint' => 11, 'type' => 'int'),
			'misses' => array('constraint' => 11, 'type' => 'int'),
			'swings' => array('constraint' => 11, 'type' => 'int'),
			'tohit' => array('type' => 'float'),
			'averagedelay' => array('type' => 'float'),
			'critperc' => array('constraint' => 8, 'type' => 'varchar'),
			'parrypct' => array('constraint' => 8, 'type' => 'varchar'),
			'blockpct' => array('constraint' => 8, 'type' => 'varchar'),
			'overheal' => array('constraint' => 11, 'type' => 'int'),

		), array('id'));
	}

	public function down()
	{
		\DBUtil::drop_table('damagetype_tables');
	}
}