<?php
/**
 * The production database settings. These get merged with the global settings.
 */

return array(
	'default' => array(
        'type' => 'mysqli',
		'connection'  => array(
            'hostname'   => 'localhost',
            'port'       => '3306',
			'database'   => 'advanced_combat_tracker',
			'username'   => 'user_act',
			'password'   => 'ba7yd5lv',
            'persistent' => false,
            'compress'   => false,
		),
        'identifier' => '`',
        'table_prefix' => '',
        'charset' => 'utf8',
        'enable_cache' => true,
        'profiling' => false,
        'readonly' => false,
	),
);
