<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/*
| -------------------------------------------------------------------------
| Hooks
| -------------------------------------------------------------------------
| This file lets you define "hooks" to extend CI without hacking the core
| files.  Please see the user guide for info:
|
|	https://codeigniter.com/user_guide/general/hooks.html
|
*/

/**
 * Hook to initialize autoloader of the interfaces
 */
$hook['pre_system'] = array(
	'class'    => 'Interface_autoloader',
	'function' => '__construct',
	'filename' => 'Interface_autoloader.php',
    'filepath' => 'hooks'
);
