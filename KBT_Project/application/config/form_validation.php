<?php

$config = array(
        'friend_validation' => array(
                array(
                        'field' => 'Name',
                        'label' => 'Name',
                        'rules' => 'required|trim|alpha|min_length[3]'
                ),
                
                
				array(
                        'field' => 'Date_Of_Birth',
                        'label' => 'Date of Birth',
                        'rules' => ''
                ),
				array(
                        'field' => 'Father_Name',
                        'label' => 'Father/Spouse Name',
                        'rules' => 'trim|min_length[3]'
                ),
				
				array(
                        'field' => 'Plot_No',
                        'label' => 'Flat/Plot No',
                        'rules' => 'required|trim|regex_match[/^[\/|a-zA-Z|0-9|-]+$/]'
                ),
					
				array(
                        'field' => 'Street_Name',
                        'label' => 'Street Name',
                        'rules' => 'required|trim'
                ),
				array(
                        'field' => 'Pincode',
                        'label' => 'Pincode',
                        'rules' => 'integer'
                ),
				array(
                        'field' => 'Mobile',
                        'label' => 'Mobile',
                        'rules' => 'required|numeric|exact_length[10]|is_unique[volunteer_info.Mobile]'
                ),
				array(
                        'field' => 'Email',
                        'label' => 'Email',
                        'rules' => 'required|trim|valid_email|is_unique[volunteer_info.Email]'
                ),	
				array(
                        'field' => 'PAN',
                        'label' => 'PAN NO',
                        'rules' => 'alpha_numeric|is_unique[volunteer_info.PAN]'
                ),
				array(
                        'field' => 'Aadhar',
                        'label' => 'Aadhar',
                        'rules' => 'trim|numeric|exact_length[16]|is_unique[volunteer_info.Aadhar]'
                ),	
				
				array(
                        'field' => 'Write_About_Self',
                        'label' => 'Write about self',
                        'rules' => 'required|trim|callback_count_words'
                ),
				array(
                        'field' => 'Reason_To_Join',
                        'label' => 'Reason why you want to be a member of this trust',
                        'rules' => 'required|trim|callback_count_words'
                ),
				array(
                        'field' => 'Reg_date',
                        'label' => 'Date',
                        'rules' => 'required'
                ),
				array(
                        'field' => 'City',
                        'label' => 'City',
                        'rules' => 'required|trim|alpha|min_length[3]'
                ),
				array(
                        'field' => 'State',
                        'label' => 'State',
                        'rules' => 'required|trim|alpha_numeric_spaces|min_length[3]'
                ),
				array(
                        'field' => 'Country',
                        'label' => 'Country',
                        'rules' => 'required|trim|alpha|min_length[3]'
                ),
				array(
                        'field' => 'Gender',
                        'label' => 'Gender',
                        'rules' => 'required|callback_check_select_input'
                ),
				array(
                        'field' => 'Employment_Status',
                        'label' => 'Employment Status',
                        'rules' => 'required|callback_check_select_input'
                ),
	
	

				
        ),

	'contact_us_form'=>array(
			
			array(
                        'field' => 'NAME',
                        'label' => 'Name',
                        'rules' => 'trim|required|min_length[3]|regex_match[/^[a-zA-z]+([\s][a-zA-Z]+)*$/]'
                ),
			array(
                        'field' => 'EmailId',
                        'label' => 'Email',
                        'rules' => 'trim|required|valid_email'
                ),
			array(
                        'field' => 'COUNTRY',
                        'label' => 'Country',
                        'rules' => 'trim|required|min_length[3]'
                ),
			array(
                        'field' => 'MESSAGE',
                        'label' => 'Message',
                        'rules' => 'trim|required'
                ),

	)
);































?>