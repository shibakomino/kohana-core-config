<?php
use \Kohana\HTTP\Header as Header;

$config = new Config();
$config->attach(new Config_File());

$mimes = $config->load('mimes');
$userAgents = $config->load('user_agents');

Header::$mimes = $mimes;
Text::$browsers = $userAgents->get('browser');

//Text::group = Kohana::$config->load('user_agents')->$value