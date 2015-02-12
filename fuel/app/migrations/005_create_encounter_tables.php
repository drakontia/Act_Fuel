<?php

namespace Fuel\Migrations;

class Create_encounter_table
{
	public function up()
	{
		\DBUtil::create_table('encounter_table', array(
			'id' => array('constraint' => 11, 'type' => 'int', 'auto_increment' => true, 'unsigned' => true),
			'encid' => array('constraint' => 8, 'type' => 'char'),
			'title' => array('constraint' => 64, 'type' => 'varchar'),
			'starttime' => array('type' => 'timestamp'),
			'endtime' => array('type' => 'timestamp'),
			'duration' => array('constraint' => 11, 'type' => 'int'),
			'damage' => array('constraint' => 20, 'type' => 'bigint'),
			'encdps' => array('type' => 'double'),
			'zone' => array('constraint' => 64, 'type' => 'varchar'),
			'kills' => array('constraint' => 11, 'type' => 'int'),
			'deaths' => array('constraint' => 11, 'type' => 'int'),

		), array('id'));
	}

	public function down()
	{
		\DBUtil::drop_table('encounter_table');
	}
}
