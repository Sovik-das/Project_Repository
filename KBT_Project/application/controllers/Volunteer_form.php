<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Volunteer_form extends CI_Controller {

		
		 public function __construct()
        {
                parent::__construct();
                
        }
	public function index(){

	
		$this->load->view('WEBPAGES/Be_A_Friend.php');

		
		
               
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

	public function validate_form(){
	
		if($this->form_validation->run('friend_validation')){
					
				$this->load->model('Volunteer_Personal_Info','Pf');
				
				$input_data = $this->input->post();
				//print_r($input_data);
			
				if($this->Pf->save_data($input_data)){
						
						echo '<script type="text/JavaScript">  
    					 alert("Successfully Submitted"); 
    					 </script>';
					}

				else{
							echo '<script type="text/JavaScript">  
    					 alert("Fail to submit"); 
    					 </script>';
					}
					$this->load->view('WEBPAGES/Be_A_Friend.php');		
						
				}
		else{
				$this->load->view('WEBPAGES/Be_A_Friend.php');
					//echo("Not Successfull");
			
		}

		
}
		
		

}
?>