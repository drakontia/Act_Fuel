<?php
// Bootstrap the framework DO NOT edit this
require COREPATH.'bootstrap.php';


Autoloader::add_classes(array(
	// Add classes you want to override here
	// Example: 'View' => APPPATH.'classes/view.php',
));

// Register the autoloader
Autoloader::register();

/**
 * Your environment.  Can be set to any of the following:
 *
 * Fuel::DEVELOPMENT
 * Fuel::TEST
 * Fuel::STAGING
 * Fuel::PRODUCTION
 */
Fuel::$env = (isset($_SERVER['FUEL_ENV']) ? $_SERVER['FUEL_ENV'] : Fuel::DEVELOPMENT);

// Initialize the framework with the config file.
Fuel::init('config.php');

//Internationalization of Web Application
$languages = explode(',', $_SERVER['HTTP_ACCEPT_LANGUAGE']);
if (isset($languages[0]))
{
    $langfile = File::read_dir(APPPATH.'lang/'.$language[0], 0, array(
        '!^\.',
        '\.php$' => 'file',
        '\.yaml$' => 'file',
        '!^_',
    ));

    if (isset($langfile))
    {
        Config::set('language', $language[0]);
    }
    else
    {
        $lang2 = Str::sub($language[0], 0, 2);
        $langfile2 = File::read_dir(APPPATH.'lang/'.$lang2, 0, array(
            '!^\.',
            '\.php$' => 'file',
            '\.yaml$' => 'file',
            '!^_',
        ));
        if (isset($langfile2))
        {
            Config::set('language', $lang2);
        }
        // else { use default language }
    }
}
