<?php

namespace Fuel\Migrations;

class Create_Skills
{
	public function up()
	{
		\DBUtil::create_table('skills', array(
			'id' => array('constraint' => 11, 'type' => 'int', 'auto_increment' => true, 'unsigned' => true),
			'swingtype' => array('constraint' => 4, 'type' => 'tinyint'),
			'name' => array('constraint' => 64, 'type' => 'varchar'),
			'duration' => array('constraint' => 64, 'type' => 'int'),
			'recast' => array('constraint' => 64, 'type' => 'int'),

		), array('id'));
	}

	public function down()
	{
		\DBUtil::drop_table('skills');
	}
}

