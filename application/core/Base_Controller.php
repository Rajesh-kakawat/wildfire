<?php

defined('BASEPATH') || exit('No direct script access allowed');

/**
 * Bonfire
 *
 * An open source project to allow developers to jumpstart their development of
 * CodeIgniter applications
 *
 * @package Bonfire
 * @author Bonfire Dev Team
 * @copyright Copyright (c) 2011 - 2015, Bonfire Dev Team
 * @license http://opensource.org/licenses/MIT The MIT License
 * @link http://cibonfire.com
 * @since Version 1.0
 * @filesource
 */

/**
 * Base Controller
 *
 * This provides a controller that your controllers can extend. This allows any
 * tasks that need to be performed sitewide to be done in one place.
 *
 * Since it extends from MX_Controller, any controller in the system can be used
 * in the HMVC style, using modules::run(). See the docs at:
 * https://bitbucket.org/wiredesignz/codeigniter-modular-extensions-hmvc/wiki/Home
 * for more details on the HMVC code used in Bonfire.
 *
 * @package Bonfire\Application\Core\Base_Controller
 * @author Bonfire Dev Team
 * @link http://cibonfire.com/docs/bonfire/bonfire_controllers
 */
class Base_Controller extends MX_Controller
{

    /**
     *
     * @var string Stores the previously viewed page's complete URL.
     */
    protected $previous_page;

    /**
     *
     * @var string Stores the page requested.
     *     
     *      This will sometimes be different than the previous page if a redirect
     *      happened in the controller.
     */
    protected $requested_page;

    /**
     *
     * @var object Stores the current user's details, if they've logged in.
     */
    protected $current_user = null;

    /**
     *
     * @var bool If TRUE, this class requires the user to be logged in before
     *      accessing any method.
     */
    protected $require_authentication = false;

    /**
     *
     * @var array Stores a number of items to 'autoload' when the class
     *      constructor runs. This allows any controller to easily set items which
     *      should always be loaded, but not to force the entire application to
     *      autoload it through the config/autoload file.
     */
    public $autoload = array(
        // 'libraries' => array('settings/settings_lib', 'events'),
        'helpers' => array('application'),
        'models' => array()
    );

    // --------------------------------------------------------------------

    /**
     * Class constructor
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();

        // Handle any autoloading here...
        $this->autoload_classes();
    }

    /**
     * Performs the authentication of a class.
     * Ensures that a user is logged in.
     * Any additional authentication will need to be done by the child classes.
     *
     * By having the authenticaiton handled here, it can be called in the
     * Base_Controller's __construct() method to ensure the user's chosen
     * language is used.
     */
    protected function authenticate()
    {
        // Load the Auth library before the parent constructor to ensure the
        // current user's settings are honored by the parent
        $this->load->library('users/ion_auth');

        // implement below functionality
        /*
         * // Ensure the user is logged in.
         * $this->auth->restrict();
         *
         * $this->set_current_user();
         */
    }

    /**
     * Autoloads any class-specific files that are needed throughout the
     * controller.
     * This is often used by base controllers, but can easily be
     * used to autoload models, etc.
     *
     * @return void
     */
    public function autoload_classes()
    {
        // Using ! empty() because count() returns 1 for certain error conditions
        if (! empty($this->autoload['libraries']) && is_array($this->autoload['libraries'])) {
            foreach ($this->autoload['libraries'] as $library) {
                $this->load->library($library);
            }
        }

        if (! empty($this->autoload['helpers']) && is_array($this->autoload['helpers'])) {
            foreach ($this->autoload['helpers'] as $helper) {
                $this->load->helper($helper);
            }
        }

        if (! empty($this->autoload['models']) && is_array($this->autoload['models'])) {
            foreach ($this->autoload['models'] as $model) {
                $this->load->model($model);
            }
        }
    }
}
