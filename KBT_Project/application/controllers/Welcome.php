<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */

		/*constructor*/	
		 public function __construct()
        {
                parent::__construct();
                
        }

	public function index()
	{
		 $this->Home();
		
	}
	
		

		public function Home(){
		 $this->load->view('WEBPAGES/Header.php');
        $this->load->view('WEBPAGES/Nav.php');
        $this->load->view('WEBPAGES/Content.php');
        $this->load->view('WEBPAGES/Footer.php');
	

	}

	public function AboutUs(){
		$this->load->view('WEBPAGES/Header.php');
        $this->load->view('WEBPAGES/Nav.php');
        $this->load->view('WEBPAGES/About_Us.php');
        $this->load->view('WEBPAGES/Footer.php');
			
			}
		
		public function AdministrativePage(){
			$this->load->view('WEBPAGES/Header.php');
        $this->load->view('WEBPAGES/Nav.php');
        $this->load->view('WEBPAGES/Administrative_Page.php');
        $this->load->view('WEBPAGES/Footer.php');
			}

		public function Awareness(){
			$this->load->view('WEBPAGES/Header.php');
        	$this->load->view('WEBPAGES/Nav.php');
        	$this->load->view('WEBPAGES/Awareness.php');
        	$this->load->view('WEBPAGES/Footer.php');
			
			}

		


		public function ContactUs(){
			
        	$this->load->view('WEBPAGES/ContactUs.php');
        	
			
			}


		public function CSR_Page(){
			$this->load->view('WEBPAGES/Header.php');
        	$this->load->view('WEBPAGES/Nav.php');
        	$this->load->view('WEBPAGES/CSR.php');
        	$this->load->view('WEBPAGES/Footer.php');
			
			}
		
		public function Donate(){

			$this->load->view('WEBPAGES/Header.php');
        	$this->load->view('WEBPAGES/Nav.php');
        	$this->load->view('WEBPAGES/Donate.php');
        	$this->load->view('WEBPAGES/Footer.php');
			
			}
	
		public function ElderlyCare(){
			$this->load->view('WEBPAGES/Header.php');
        	$this->load->view('WEBPAGES/Nav.php');
        	$this->load->view('WEBPAGES/ElderlyCare.php');
        	$this->load->view('WEBPAGES/Footer.php');
			
			}
		public function FreeCoachingClass(){
			$this->load->view('WEBPAGES/Header.php');
        	$this->load->view('WEBPAGES/Nav.php');
        	$this->load->view('WEBPAGES/FreeCoachingClass.php');
        	$this->load->view('WEBPAGES/Footer.php');
			
			}
	 
		public function GetInvolved(){
			$this->load->view('WEBPAGES/Header.php');
        	$this->load->view('WEBPAGES/Nav.php');
        	$this->load->view('WEBPAGES/GetInvolved.php');
        	$this->load->view('WEBPAGES/Footer.php');
			
			}

	public function LifeSkill_Project(){
			$this->load->view('WEBPAGES/Header.php');
        	$this->load->view('WEBPAGES/Nav.php');
        	$this->load->view('WEBPAGES/LifeSkill_Project.php');
        	$this->load->view('WEBPAGES/Footer.php');
			
			}

	public function ProtectionAndCare(){
			$this->load->view('WEBPAGES/Header.php');
        	$this->load->view('WEBPAGES/Nav.php');
        	$this->load->view('WEBPAGES/ProtectionAndCare.php');
        	$this->load->view('WEBPAGES/Footer.php');
			
			}


	public function Sponsor_A_Child(){
			$this->load->view('WEBPAGES/Header.php');
        	$this->load->view('WEBPAGES/Nav.php');
        	$this->load->view('WEBPAGES/Sponsor_A_Child.php');
        	$this->load->view('WEBPAGES/Footer.php');
			
			}

	public function Sponsor_An_Event(){
			$this->load->view('WEBPAGES/Header.php');
        	$this->load->view('WEBPAGES/Nav.php');
        	$this->load->view('WEBPAGES/Sponsor_An_Event.php');
        	$this->load->view('WEBPAGES/Footer.php');
			
			}

	public function Sports(){
			$this->load->view('WEBPAGES/Header.php');
        	$this->load->view('WEBPAGES/Nav.php');
        	$this->load->view('WEBPAGES/Sports.php');
        	$this->load->view('WEBPAGES/Footer.php');
			
			}
	

	public function Event_And_Press(){

		$this->load->view('WEBPAGES/Page_Not_Found.php');
	}
		
	public function Board_Members(){
		
		$this->load->view('WEBPAGES/Page_Not_Found.php');	
			}
	public function Validate_Contact_Us(){
		
		if($this->form_validation->run('contact_us_form')){
			$this->load->model('Message','Mg');
			//echo ("Validation Successfull");
				$msg = $this->input->post();
				if($this->Mg->save_message($msg)){
							echo '<script type="text/JavaScript">  
    					 alert("Successfully Submitted"); 
    					 </script>';
						$this->load->view('WEBPAGES/ContactUs.php');
					
				}
					else{
							echo '<script type="text/JavaScript">  
    					 alert("Failed to submit"); 
    					 </script>';
						}
		}
		else{
				$this->load->view('WEBPAGES/ContactUs.php');
					//echo("Not Successfull");
			
		}


	}	

	

}


?>