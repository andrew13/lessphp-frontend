<?php
define('LESSPHPFE', 'handler.php');
file_exists(LESSPHPFE) ? include LESSPHPFE : die('alert("Parse error: Can\'t find the lessphp-frontend handler class file: \''.LESSPHPFE.'\'.");');

define('LESSPHPFECONFIG', 'config.php');
file_exists(LESSPHPFECONFIG) ? include LESSPHPFECONFIG : die('alert("Parse error: Can\'t find the lessphp-frontend config file: \''.LESSPHPFECONFIG.'\'.");');

$lessPhpFrontend = new lessphpfe_handler( new lessphpfe_config() );

$lessPhpFrontend->compile();
