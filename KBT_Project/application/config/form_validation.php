<?php

$config = array(
        'friend_form_validation' => array(
                array(
                        'field' => 'fname',
                        'label' => 'First Name',
                        'rules' => 'required|alpha'
                ),
                array(
                        'field' => 'Mname',
                        'label' => 'Middle Name',
                        'rules' => 'alpha'
                ),
                array(
                        'field' => 'lname',
                        'label' => 'Last Name',
                        'rules' => 'required|alpha'
                ),
				array(
                        'field' => 'DOB',
                        'label' => 'Date of Birth',
                        'rules' => 'required'
                ),
				array(
                        'field' => 'FName',
                        'label' => 'Father/Spouse Name',
                        'rules' => 'required'
                ),
				array(
                        'field' => 'FName',
                        'label' => 'Father/Spouse Name',
                        'rules' => 'required'
                ),
				array(
                        'field' => 'PlotNo',
                        'label' => 'Flat/Plot No',
                        'rules' => 'required|alpha_dash|numeric'
                ),
					
				array(
                        'field' => 'StreetName',
                        'label' => 'Street Name',
                        'rules' => 'required|alpha|regex_match[//]'
                ),
				array(
                        'field' => 'Pincode',
                        'label' => 'Pincode',
                        'rules' => 'required|integer'
                ),
				array(
                        'field' => 'Mobile',
                        'label' => 'Mobile',
                        'rules' => 'required|numeric|exact_length[10]'
                ),
				array(
                        'field' => 'Emailid',
                        'label' => 'Email',
                        'rules' => 'required|valid_email'
                ),	
				array(
                        'field' => 'PAN',
                        'label' => 'PAN NO',
                        'rules' => 'required|alpha_numeric'
                ),
				array(
                        'field' => 'Aadhar',
                        'label' => 'Aadhar',
                        'rules' => 'numeric|exact_length[16]'
                ),	
				array(
                        'field' => 'Self',
                        'label' => 'Write about self in 250 words',
                        'rules' => 'numeric|exact_length[10]'
                ),
				array(
                        'field' => 'Self',
                        'label' => 'Write about self',
                        'rules' => 'required|alpha_numeric_spaces|callback_count_words'
                ),
				array(
                        'field' => 'Why',
                        'label' => 'Reason why you want to be a member of this trust',
                        'rules' => 'required|alpha_numeric_space|callback_count_words'
                ),
				array(
                        'field' => 'submit_date',
                        'label' => 'Date',
                        'rules' => 'required'
                ),
	
	

				
        )
);































?>