<?php
defined('BASEPATH') OR exit('No direct script access allowed');

require(APPPATH.'libraries/REST_Controller.php');

class Users extends REST_Controller {
    
    
    public function __construct()
    {
        parent::__construct();
        
    }
    function index_get()
    {
        $this->load->model('user_model');
        $user = $this->user_model->find($this->get('id'));
        //$data = array('returned: '. $this->get('id'));
        $this->response($user);
    }
    
    function user_get()
    {
        $this->load->model('users_model');
        $user = $this->user_model->find($this->get('id'));
        //$data = array('returned: '. $this->get('id'));
        $this->response($user);
    }
    
    function user_post()
    {
        $data = array('returned: '. $this->post('id'));
        $this->response($data);
    }
    
    function user_put()
    {
        $data = array('returned: '. $this->put('id'));
        $this->response($data);
    }
    
    function user_delete()
    {
        $data = array('returned: '. $this->delete('id'));
        $this->response($data);
    }
}