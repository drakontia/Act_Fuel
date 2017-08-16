<?php
/**
 * The development database settings. These get merged with the global settings.
 */

return array(
	'default' => array(
        'type' => 'mysqli',
		'connection'  => array(
			'dsn'        => 'mysql:host=mysql;dbname=act_dev',
			'username'   => 'root',
			'password'   => 'password',
		),
	),
);
