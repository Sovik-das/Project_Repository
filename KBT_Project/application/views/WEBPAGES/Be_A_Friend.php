 <?php include('Header.php');?>
 
 <?php include('Nav.php');?>
 <div class="jumbotron ">
		
			<h2 class="text-center"> <b>Be A Friend</b></h2>
		
		<p>
			You can be a friend of Kripa Benevolent Trust and lend your support to our philanthropic cause. You can download form and can write to us as friendskbtrust@gmail.com.
		</p>
		<p>
			<b>Roles Of A Friend:</b>
			<ul>
				<li>To spread the message of Hope and enlist support from as many people as they can.</li>
				<li>To meet once a month at chosen locations as per their convenience.</li>
				<li>To participate actively and generously in supporting the work plan of Kripa Benevolent Trust.</li>
				<li>To suggest ways and means of strengthening the fight against poverty.</li>
			</ul>
		
		</p>
		<h3 class="text-center pb-3"><b>Volunteer Registration Form</b></h3>
		<div class="container  shadow form_bg"><span class="rounded"></span>
			<?php echo form_open('Volunteer_form'); ?>
		<form >
			<div class="row my-3 py-3"">
					<div class="form-inline pb-4">
						<div class="col">
					 
							<label for="name">Name:</label>
						</div>	
					
						<div class="col">
							<input name="fname" class="form-control mx-2" placeholder="First Name" id="first_name" value ="<?php echo set_value('fname');?>">
								
						</div>	
					
						<div class="col">
							<input name="Mname" class="form-control mr-2" placeholder="Middle Name" id="middle_name" value ="<?php echo set_value('Mname');?>">
							
						</div>
						<div>
							<input name="lname" class="form-control mr-2" placeholder="Last Name" id="last_name" value ="<?php echo set_value('lname');?>" >
							
						</div>
							
							
		
					</div>
							<div class="row-lg">
										<div  class=" col-sm text-danger small"></div>
										<div  class=" col-md text-danger small"><?php echo form_error('fname');?></div>
										<div  class="col-md  text-danger small"><?php echo form_error('Mname');?></div>
										<div  class="col-md text-danger small"><?php echo form_error('lname');?></div>
							</div>
						
				</div>
				
			<div class="row">
				<div class="form-inline pb-4">
					<div class="col">
						<label for="Gender" required> Gender:</label>
					</div>
					<div class="col">	
						<label class="form-check-label mx-2">
						<input name="Male" class="form-check-input" id="male" type="checkbox" >Male
							<!-- <div class="valid-feedback">Valid</div>
							<div class="invalid-feedback">Please fill this field</div> -->
						</label>
					</div>
					<div class="col">	
						<label class="form-check-label mx-2">
						<input name="Female" class="form-check-input" id="female" type="checkbox" >Female
							<!-- <div class="valid-feedback">Valid</div>
							<div class="invalid-feedback">Please fill this field</div> -->
						</label>
					</div>	
				</div>
			</div>
			<div class="row">
				<div class="form-inline pb-4">
						<div class="col">
							<label>Date of Birth:</label>
						</div>	
						<div class="col ml-5">
							<input name="DOB" class="form-control " type ="date" id="DOB" value ="<?php echo set_value('DOB');?>">
							
						</div>
						<div class-"row-lg">
							<div class="col-md text-danger small"><?php echo form_error('DOB');?>
							</div>
						</div>
				</div>
			</div>
			<div class="row">
					<div class="form-inline pb-4">
						<div class="col-sm">
							<label>Father/Spouse Name:</label>
						</div>
						<div class="col-lg">
							<input name="FName" class="form-control"  id="name" value ="<?php echo set_value('FName');?>">
							
						</div>
						<div class-"row-lg">
							<div class="col-md text-danger small"><?php echo form_error('FName');?>
							</div>
						</div>
					</div>
			</div>
			<h4 class="mb-3">Postal Address</h4>
			<div class="row-lg">
				<div class="form-inline pb-4">
					
						<label>Flat/Plot No:</label>
						<input name="PlotNo" class="form-control mx-2"  id="Plot_No" value ="<?php echo set_value('PlotNo');?>">
						<div class-"row-lg">
							<div class="col-md text-danger small"><?php echo form_error('PlotNo');?>
							</div>
						</div>
						
				</div>
				
			</div>
			
			<div class="row-lg">
					<div class="form-inline pb-4">	
						<label >Street Name:</label>	
						<input name="StreetName" class="form-control mx-2 col-5"  id="SteetName" value ="<?php echo set_value('StreetName');?>">
						<div class-"row-lg">
							<div class="col-md text-danger small"><?php echo form_error('StreetName');?>
							</div>
						</div>
					</div>
			</div>			
			<div class="row">
					<div class="form-inline pb-4">
						<div class="col">
							<label class="mr-4">City:</label>
						</div>	
						<div class="col">	
							<select name="City" class="form-control"  id="City">
								<option data-countryCode="IN" value="91">India(+91)</option>
								<option data-countryCode="US" value="1">USA(+1)</option>
								<option data-countryCode="UK" value ="44">UK(+44)</option>
							</select>
							<!-- <input for="City" class="form-control "  id="City" required> -->
							<!-- <div class="valid-feedback">Valid</div>
							<div class="invalid-feedback">Please fill this field</div> -->
						</div>	
						
						<div class="col">
							<label>Pincode:</label>	
						</div>
						<div class="col">	
							<input name="Pincode" class="form-control mx-2"  id="Pincode" value ="<?php echo set_value('Pincode');?>">
							
						</div>
							<div class-"row-lg">
							<div class="col-md text-danger small"><?php echo form_error('Pincode');?>
							</div>
						</div>
					</div>	
			</div>	
				<div class="row-lg">
					<div class="form-inline pb-4">
						<label class="mr-5">State:</label>	
						<input name="State" class="form-control"  id="State" value ="<?php echo set_value('State');?>">
						<!-- <div class="valid-feedback">Valid</div>
							<div class="invalid-feedback">Please fill this field</div> -->
					</div>
				</div>	
				<div class="row-lg">
					<div class="form-inline pb-4">	
						<label class="mr-4">Country:</label>	
						<input name="Country" class="form-control"  id="Country" value ="<?php echo set_value('Country');?>">
						<!-- -<div class="valid-feedback">Valid</div>
							<div class="invalid-feedback">Please fill this field</div> -->
					</div>
				</div>
				<div class="row">
					<div class="form-inline pb-4">
						<div class="col">
							<label class="mr-4">Mobile:</label>	
						</div>	
						<div class="col-2-sm">
							<select name="CountryCode" class="form-control" type="number" min="10" id="CountryCode">
								<option data-countryCode="IN" value="91">India(+91)</option>
								<option data-countryCode="US" value="1">USA(+1)</option>
								<option data-countryCode="UK" value ="44">UK(+44)</option>
							</select>	
						</div>	
						<div class="col">
							<input name="Mobile" type ="tel"class="form-control"  id="Mobile" value ="<?php echo set_value('Mobile');?>">
							
						</div>
								<div class-"row-lg">
							<div class="col-md text-danger small"><?php echo form_error('Mobile');?>
							</div>
						</div>	
					
					</div>
				</div>	
				<div class="row">
					<div class="form-inline pb-4">
						<div class="col">
							<label class="mr-4">Email:</label>
						</div>
						<div class="col">
						
							<input name="Emailid" type ="email" class="form-control" id="email" value ="<?php echo set_value('Emailid');?>">
							
						</div>
								<div class-"row-lg">
							<div class="col-md text-danger small"><?php echo form_error('Emailid');?>
							</div>
						</div>
					
					</div>
				
				</div>
				<div class="row">
					<div class="form-inline pb-4">
						<div class="col-2-sm">
							
							<label class="ml-3">PAN No:</label>
						</div>
						<div class="col">
							<input name="PAN" class="form-control ml-3" id="PAN" value ="<?php echo set_value('PAN');?>">
							
						</div>
							<div class-"row-lg">
							<div class="col-md text-danger small"><?php echo form_error('PAN');?>
							</div>
						</div>
						<div class="col-md">
							
							<label>Aadhar:</label>
						</div>
						<div class="col-md">
								<input name="Aadhar" class="form-control" id="Aadhar" value ="<?php echo set_value('Aadhar');?>">
								
								
						</div>
						
							<div class="col-sm text-danger small"><?php echo form_error('Aadhar');?></div>
					
					</div>
				</div>
				
					<h4 class="mb-3">Employment Status</h4>
				
				<div class="row">
					<div  class="form-inline pb-4">
						<div class="col">	
							<label class="form-check-label mx-2">
							<input name="Not_Employed" class="form-check-input" type="checkbox">Not Employed</label>
						</div>
						<div class="col-2-md">	
							<label class="form-check-label mx-2">
							<input name="GovtEmployee" class="form-check-input" type="checkbox">Govt. Employed</label>
						</div>
						<div class="col">	
							<label class="form-check-label mx-2">
							<input name="Male" class="form-check-input" type="checkbox">Not Employed</label>
						</div>
					</div>
				</div>
				<div class="row-lg">
					<div  class="form-inline pb-4">
						<div class="col-4-md">	
							<label class="form-check-label mr-2">
							<input name="Not_Employed" class="form-check-input" type="checkbox">Private Sector Employee</label>
						</div>
						<div class="col-2-md">	
							<label class="form-check-label mx-3">
							<input name="GovtEmployee" class="form-check-input" type="checkbox">Working in NGO</label>
						</div>
						<div class="col-3-sm">	
							<label class="form-check-label ">
							<input name="Male" class="form-check-input" type="checkbox">Other</label>
						</div>
					</div>
				
				</div>
				<h4 class="mb-3">Write about self in 250 words:</h4>
				<div class="row-lg pb-4">
					<textarea  name="Self" type="text" class="form-control-lg  col-5" value ="<?php echo set_value('Self');?>" ></textarea>
					<div class-"row-lg">
							<div class="col-md text-danger small"><?php echo form_error('Self');?>
							</div>
						</div>
				
				</div>
				<h4 class="mb-3">Reason why you want to be a member of this trust:-</h4>
				<div class="row-lg pb-4">
					<textarea  name="Why" type="text" class="form-control-lg  col-5" value ="<?php echo set_value('Why');?>"></textarea>
					<div class-"row-lg">
							<div class="col-md text-danger small"><?php echo form_error('Why');?>
							</div>
						</div>				
				</div>
				<div class="row-lg">
					<div class="form-inline ">
							<div class="col--3-sm">
								<label >Date:</label>
							</div>
							<div class="col-3-md">
				
								<input type="date" name="submit_date"class="form-control ml-4" value ="<?php echo set_value('submit_date');?>">
								
							</div>
					</div>		
					
				</div>
				<div class="row pt-4">
					<div class="col">
						
					</div>
					<div class="col">
						<button class="btn btn-lg bg-info ml-3 text-white float-right">Register</button>
					
					</div>
				</div>
		
		
		
		</form>
		</div>
	</div>



<?php include ('Footer.php');?>