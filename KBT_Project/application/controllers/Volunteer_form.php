<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Volunteer_form extends CI_Controller {

	public function index(){
	
		//$this->load->view('WEBPAGES/Be_A_Friend.php');

		if($this->form_validation->run('friend_validation')){
			echo ("Validation Successfull");
		}
		else{
				$this->load->view('WEBPAGES/Be_A_Friend.php');
					//echo("Not Successfull");
			
		}
		
               
	}

	public function check_select_input($value){
			
		if ($value=='0'){
			
			$this->form_validation->set_message('check_select_input', 'Please Choose a option');
			return false;
		}
		else
			return true;
	}

	public function count_words($str){
		
		$count = str_word_count($str,0);
		
			
		if($count<=250){
			
			
		
			return true;
		}
		else{
			$this->form_validation->set_message('count_words', 'Please Write within 250 words');
				
			return false;	
		}
}
	

}
?>