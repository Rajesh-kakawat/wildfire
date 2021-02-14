<?php
/**
 * Name:    Ion Auth Model
 * Author:  Ben Edmunds
 *           ben.edmunds@gmail.com
 * @benedmunds
 *
 * Added Awesomeness: Phil Sturgeon
 *
 * Created:  10.01.2009
 *
 * Description:  Modified auth system based on redux_auth with extensive customization. This is basically what Redux Auth 2 should be.
 * Original Author name has been kept but that does not mean that the method has not been modified.
 *
 * Requirements: PHP5.6 or above
 *
 * @package    CodeIgniter-Ion-Auth
 * @author     Ben Edmunds
 * @link       http://github.com/benedmunds/CodeIgniter-Ion-Auth
 * @filesource
 */
defined('BASEPATH') OR exit('No direct script access allowed');

/**
 * Class Ion Auth Model
 * @property Ion_auth $ion_auth The Ion_auth library
 */
class User_model extends BF_Model
{

    protected $table_name   = 'users';
    protected $key          = 'id';
    protected $soft_deletes = TRUE;
    protected $date_format  = 'int';
    protected $log_user     = FALSE;
    
    protected $set_created  = FALSE;
    protected $created_field    = 'created_on';
    protected $created_by_field = 'created_by';
    
    protected $set_modified     = FALSE;
    protected $modified_field   = 'modified_on';
    protected $modified_by_field = 'modified_by';
    
    protected $deleted_field    = 'deleted';
    protected $deleted_by_field = 'deleted_by';
    
    
}
