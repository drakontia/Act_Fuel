<?php
/**
 * The development database settings. These get merged with the global settings.
 */

return array(
	'default' => array(
        'type' => 'mysqli',
		'connection'  => array(
			'dsn'        => 'mysql:host=localhost;dbname=actdb_dev',
			'username'   => 'user_act',
			'password'   => 'ba7yd5lv',
		),
	),
);
