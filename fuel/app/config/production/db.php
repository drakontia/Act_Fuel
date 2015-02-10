<?php
/**
 * The production database settings. These get merged with the global settings.
 */

return array(
	'production' => array(
        'type' => 'mysqli',
		'connection'  => array(
			'dsn'        => 'mysql:host=localhost;dbname=advanced_combat_tracker',
			'username'   => 'user_act',
			'password'   => 'ba7yd5lv',
		),
	),
);
