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
      'database'   => 'actdb_production',
      'username'   => 'user_actdb',
      'password'   => 'yourpassword',
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
