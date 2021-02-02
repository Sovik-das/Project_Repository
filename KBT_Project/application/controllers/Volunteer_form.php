<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Volunteer_form extends CI_Controller {

	public function index(){
	
		
		
		if($this->form_validation->run('friend_form_validation')){
			echo ("Validation Successfull");
		}
		else{
				$this->load->view('WEBPAGES/Be_A_Friend.php');
			
		}
               
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