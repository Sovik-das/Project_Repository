<?php

defined('BASEPATH') OR exit('No direct script access allowed');
/*Controller class to hadle login session*/

class Login extends CI_Controller{

	 public function __construct()
        {
                parent::__construct();
                // Your own constructor code
        }
		
		public function index(){
		/*
		$this->load->view('WEBPAGES/Header');
		$this->load->view('WEBPAGES/Login_New_Page');*/
		$this->load->view('WEBPAGES/Page_Not_Found');
		
	}

}





























?>