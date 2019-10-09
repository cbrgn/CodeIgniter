<?php
defined('BASEPATH') or exit('No direct script access allowed');

/**
 * Autoloader of interfaces
 * 
 * Allows the use of the users interfaces in controllers, models, and other classes
 */
class Interface_autoloader
{
    /**
     * Path of the users interfces folder
     *
     * @var string
     */
    private $interfacesFolder;

    public function __construct()
    {
        /**
         * Normalization of path to interfaces folder
         */
        $this->interfacesFolder = str_replace(['/', '\\'], DIRECTORY_SEPARATOR, config_item('interfaces_folder'));
        $this->init_autoloader();
    }

    /**
     * Initialization autoloader for the users interfaces
     *
     * @return void
     */
    private function init_autoloader()
    {
        spl_autoload_register(function ($className) {
            if (!interface_exists($className)) {
                require_once(APPPATH . $this->interfacesFolder . DIRECTORY_SEPARATOR . $className . '.php');
            }
        });
    }
}
