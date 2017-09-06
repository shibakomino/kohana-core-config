<?php
use \Kohana\HTTP\Header as Header;

$config = new Config();
$config->attach(new Config_File());

/* Warning!!! this add a lot dependency to config... */
Header::$mimes = $config->load('mimes');
File::$mimes = $config->load('mimes');
Text::$browsers = $config->load('user_agents')->get('browser');
Session::$config = $config->load('session')->as_array();
Encrypt::$config = $config->load('encrypt')->as_array();
Inflector::$config = $config->load('inflector')->as_array();
Valid::$credit_cards = $config->load('credit_cards')->as_array();
//Text::group = Kohana::$config->load('user_agents')->$value