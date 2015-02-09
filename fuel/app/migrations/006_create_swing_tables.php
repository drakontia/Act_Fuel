<?php

namespace Fuel\Migrations;

class Create_swing_tables
{
	public function up()
	{
		\DBUtil::create_table('swing_tables', array(
			'id' => array('constraint' => 11, 'type' => 'int', 'auto_increment' => true, 'unsigned' => true),
			'encid' => array('constraint' => 8, 'type' => 'char'),
			'stime' => array('type' => 'timestamp'),
			'attacker' => array('constraint' => 64, 'type' => 'varchar'),
			'swingtype' => array('constraint' => 4, 'type' => 'tinyint'),
			'attacktype' => array('constraint' => 64, 'type' => 'varchar'),
			'damagetype' => array('constraint' => 64, 'type' => 'varchar'),
			'victim' => array('constraint' => 64, 'type' => 'varchar'),
			'damage' => array('constraint' => 11, 'type' => 'int'),
			'damagestring' => array('constraint' => 128, 'type' => 'varchar'),
			'critical' => array('constraint' => 1, 'type' => 'char'),
			'special' => array('constraint' => 64, 'type' => 'varchar'),
			'dmgadjust' => array('constraint' => 8, 'type' => 'varchar'),
			'dmgreduced' => array('constraint' => 11, 'type' => 'int'),
			'overheal' => array('constraint' => 11, 'type' => 'int'),

		), array('id'));
	}

	public function down()
	{
		\DBUtil::drop_table('swing_tables');
	}
}