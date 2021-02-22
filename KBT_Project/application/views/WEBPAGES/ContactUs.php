<?php include('Header.php');?>
 
 <?php include('Nav.php');?>

<div class="jumbotron ">
		
			<h2 class="text-center"> <b>CONTACT US</b></h2>
		
		<p>
			<b>KRIPA BENOVOLENT TRUST</b>
			<address>
				18/2 DHARMATALA ROAD, BOSEPUKUR, KASBA
				</br>KOLKATA-700042, 
				</br>W.B. INDIA
			</address>
			Ph : 8820206050</br>
			Email:  kbtrust2018@gmail.com 
		</p>
		
		
		
			<h5 class="font-weight-bold text-uppercase mt-3 mb-4">Leave Your Message</h5>
         <?php echo form_open('Welcome/Validate_Contact_Us'); ?>
         	
      			
			<div class="input-group my-3">
				<div class="input-group-prepend">
					<span class="input-group-text">Name</span>
				</div>
					<input type ="text" class="form-control col-4" placeholder="Your Name" name="NAME" value ="<?php echo set_value('contact_name');?>"></input>	
						
			</div>	
				<div class="text-danger small"><?php echo form_error('NAME');?></div>
			
			
				
			<div class="input-group my-3">	
				<div class="input-group-prepend">
					<span class="input-group-text">Email</span>
				</div>
				<input  type="text"class="form-control col-4 "  placeholder="Your email" name="EmailId" value ="<?php echo set_value('contact_email');?>"></input>
			</div>
			<div class="text-danger small"><?php echo form_error('EmailId');?></div>
			<div class="input-group my-3">	
				<div class="input-group-prepend">
					<span class="input-group-text">Country</span>
				</div>
				<input  type="text"class="form-control col-4"  placeholder="Your Country" name="COUNTRY" value ="<?php echo set_value('country');?>"></input>
			</div>
			<div class="text-danger small"><?php echo form_error('COUNTRY');?></div>
			<div class="row">
				<label for="message" class="ml-2">Message</label></div>
				<textarea class="form-control-lg row-2 col-4" id="message" name="MESSAGE"></textarea>
				<div class="text-danger small"><?php echo form_error('MESSAGE');?></div>
			<div class="row">
			<button class="btn btn-md bg-warning text-dark" type="submit">Submit</button></div>
	
		
		
	</div>


<?php include ('Footer.php');?>