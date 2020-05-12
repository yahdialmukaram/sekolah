<?php 

defined('BASEPATH') OR exit('No direct script access allowed');

class C_user extends CI_Controller {
    
    public function __construct()
    {
        parent::__construct();
        //Do your magic here
    }
    

    public function index()
    {
        $this->load->view('user/header');
        $this->load->view('user/dashboard');
        $this->load->view('user/footer');
        
    }

}


?>