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
			<?php echo form_open('Volunteer_form/validate_form'); ?>
		
			<div class="row my-3 pt-4">
					<div class="form-inline">
						<div class="col-sm-2">
					 
							<label for="name">Name:</label>
						</div>	
						<div class="col-lg-2">
							<input name="Name" class="form-control" placeholder="Name" id="first_name" value ="<?php echo set_value('Name');?>">
						</div>	
						
						<div class="col-md text-danger small">
										
										<?php echo form_error('Name');?>
										
							</div>	
		
					</div>
							
						
				</div>
				
			<div class="row">
				<div class="form-inline pb-4">
					<div class="col mx-2">
						<label for="Gender" required> Gender:</label></div>
					<div class="col mx-2">
						
							<select class="form-control" name="Gender" placeholder="Select Gender">
								<option value ="0" <?php echo  set_select('Gender', '0', TRUE); ?>>Select One Option</option>
						    	<option value ="Male" <?php echo  set_select('Gender', 'Male'); ?>>Male</option>
						   		 <option value ="Female" <?php echo  set_select('Gender', 'Female'); ?>>Female</option>
						   		  <option value ="Other" <?php echo  set_select('Gender', 'Other'); ?>>Other</option>

						  </select>
						
						</div>
						<div class="col text-danger small">
								<?php echo form_error('Gender');?>
						</div>
					</div>
					
				</div>
			
			<div class="row">
				<div class="form-inline pb-4">
						<div class="col">
							<label>Date of Birth:</label>
						</div>	
						<div class="col ">
							<input name="Date_Of_Birth" class="form-control " type ="date" id="DOB" value ="<?php echo set_value('Date_Of_Birth');?>">
							
						</div>
						<div class-"row-lg">
							<div class="col-md text-danger small"><?php echo form_error('Date_Of_Birth');?>
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
							<input name="Father_Name" class="form-control"  id="name" value ="<?php echo set_value('Father_Name');?>">
							
						</div>
						<div class-"row-lg">
							<div class="col-md text-danger small"><?php echo form_error('Father_Name');?>
							</div>
						</div>
					</div>
			</div>
			<h4 class="mb-3">Postal Address</h4>
			<div class="row-lg">
				<div class="form-inline pb-4">
					
						<label>Flat/Plot No:</label>
						<input name="Plot_No" class="form-control mx-2"  id="Plot_No" value ="<?php echo set_value('Plot_No');?>">
						<div class-"row-lg">
							<div class="col-md text-danger small"><?php echo form_error('Plot_No');?>
							</div>
						</div>
						
				</div>
				
			</div>
			
			<div class="row-lg">
					<div class="form-inline pb-4">	
						<label >Street Name:</label>	
						<input name="Street_Name" class="form-control mx-2 col-5"  id="SteetName" value ="<?php echo set_value('Street_Name');?>">
						<div class-"row-lg">
							<div class="col-md text-danger small"><?php echo form_error('Street_Name');?>
							</div>
						</div>
					</div>
			</div>			
			<div class="row">
					<div class="form-inline pb-4">
						<div class="col-sm-2">
							<label for="City">City:</label>
						</div>	
						<div class="col">	
							<input name="City" class="form-control mx-2"  id="City" value ="<?php echo set_value('City');?>">
						</div>	
						<div class-"col">
							<div class="col-md text-danger small"><?php echo form_error('City');?>
							</div>
						</div>
					</div>
			</div>
						
						<div class="row">
							<div class="form-inline pb-4">
								<div class="col">
									<label>Pincode:</label>	
								</div>
						<div class="col">	
							<input name="Pincode" class="form-control mx-2"  id="Pincode" value ="<?php echo set_value('Pincode');?>">
							
						</div>
							
							<div class="col-md text-danger small"><?php echo form_error('Pincode');?>
							</div>
						</div>
					</div>	
			
				<div class="row-lg">
					<div class="form-inline pb-4">
						<label class="mr-5">State:</label>	
						<input name="State" class="form-control"  id="State" value ="<?php echo set_value('State');?>">
						<div class="col text-danger small"><?php echo form_error('State');?></div>
							
					</div>
				</div>	
				<div class="row-lg">
					<div class="form-inline pb-4">	
						<label class="mr-4">Country:</label>	
						<input name="Country" class="form-control"  id="Country" value ="<?php echo set_value('Country');?>">
						<div class="col text-danger small"><?php echo form_error('Country');?></div>
							
					</div>
				</div>
				<div class="row">
					<div class="form-inline pb-4">
						<div class="col">
							<label class="mr-4">Mobile:</label>	
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
						
							<input name="Email" type ="email" class="form-control" id="email" value ="<?php echo set_value('Email');?>">
							
						</div>
								<div class-"row-lg">
							<div class="col-md text-danger small"><?php echo form_error('Email');?>
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
				
				
				
					
					<label><h4>Employment Status</h4></label>
					<div class="col mb-3">
					
							<select class="form-control" name="Employment_Status">
								<option value="0" selected="selected" <?php echo  set_select('Employment_Status', '0',TRUE); ?>>Select One Option</option>
						    	<option value ="Not Employed" <?php echo  set_select('Employment_Status', 'Not Employed',TRUE); ?>>Not Employed</option>
						   		 <option value ="Govt. Employed" <?php echo  set_select('Employment_Status', 'Govt. Employed',TRUE); ?>>Govt. Employed</option>
						   		 <option value ="Private Sector Employee" <?php echo  set_select('Employment_Status', 'Private Sector Employee',TRUE); ?>>Private Sector Employee</option>
						   		 <option value ="Working in NGO" <?php echo  set_select('Employment_Status', 'Working in NGO',TRUE); ?>>Working in NGO</option>
						   		 <option value ="Other" <?php echo  set_select('Employment_Status', 'Other',TRUE); ?>>Other</option>

						  </select>
					
				</div>
				<div class="col text-danger small">
						<?php echo form_error('Employment_Status');?>
				</div>
				
				<h4 class="mb-3">Write about self in 250 words:</h4>
				<div class="row-lg pb-4">
					<textarea  name="Write_About_Self" type="text" class="form-control-lg  col-5" value ="<?php echo set_value('Write_About_Self');?>" ></textarea>
					<div class-"row-lg">
							<div class="col-md text-danger small"><?php echo form_error('Write_About_Self');?>
							</div>
						</div>
				
				</div>
				<h4 class="mb-3">Reason why you want to be a member of this trust:-</h4>
				<div class="row-lg pb-4">
					<textarea  name="Reason_To_Join" type="text" class="form-control-lg  col-5" value ="<?php echo set_value('Reason_To_Join');?>"></textarea>
					<div class-"row-lg">
							<div class="col-md text-danger small"><?php echo form_error('Reason_To_Join');?>
							</div>
						</div>				
				</div>
				<div class="row-lg">
					<div class="form-inline ">
							<div class="col--3-sm">
								<label >Date:</label>
							</div>
							<div class="col-3-md">
				
								<input type="date" name="Reg_date"class="form-control ml-4" value ="<?php echo set_value('Reg_date');?>">
								
							</div>
					</div>
					<div class="col text-danger small">
							<?php echo form_error('Reg_date');?>
					</div>		
					
				</div>
				<div class="row pt-4">
					<div class="col">
						
					</div>
					<div class="col">
						<button type ="submit" class="btn btn-lg bg-info ml-3 text-white float-right">Register</button>
					
					</div>
				</div>
		
		
		
		</form>
		</div>
	</div>



<?php include ('Footer.php');?>