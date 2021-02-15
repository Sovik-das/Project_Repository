


<!-- Start your project here-->  
  <nav class="navbar navbar-expand-lg navbar-dark bg-warning fixed-top ">
  <a class="navbar-brand" href="#">
	<img src="<?php echo base_url();?>assets/img/Logo.jpg"  class="rounded-circle Image_Width"/>
  </a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarText"
    aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse " id="navbarText"> 
    <ul class="navbar-nav mr-auto ">
      <li class="nav-item active">
        <a class="nav-link text-dark font-weight-bold ml-5"  id="home" href="<?php echo base_url();?>Welcome/Home">HOME
          <span class="sr-only">(current)</span>
        </a>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link  text-dark font-weight-bold ml-3" href="#" id="navbardrop" data-toggle="dropdown">ABOUT US</a>
		
			<div class="dropdown-menu dropdown-content ">
				
				<a class="dropdown-item text-dark font-weight-bold" id ="AboutUs"  href="<?php echo base_url();?>Welcome/AboutUs">ABOUT KBT</a>
				<a class="dropdown-item text-dark font-weight-bold" href="Members">BOARD MEMBERS</a>
				<a class="dropdown-item text-dark font-weight-bold" id="Admin" href="<?php echo base_url();?>Welcome/AdministrativePage">ADMINISTRATIVE & LEGAL STATUS</a>
				
			</div>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link  text-dark font-weight-bold ml-3" href="#" id="navbardrop" data-toggle="dropdown">WHAT WE DO</a>
		
			<div class="dropdown-menu dropdown-content">
				<a class="dropdown-item text-dark font-weight-bold" id="edu" href="<?php echo base_url();?>Welcome/FreeCoachingClass">Education</a>
				<a class="dropdown-item text-dark font-weight-bold" id="Protect" href="<?php echo base_url();?>Welcome/ProtectionAndCare" >Protection & Care</a>
				<a class="dropdown-item text-dark font-weight-bold" id ="Skill" href="<?php echo base_url();?>Welcome/LifeSkill_Project">Life Skill Projects</a>
				<a class="dropdown-item text-dark font-weight-bold" id ="Sports" href="<?php echo base_url();?>Welcome/Sports">Sports</a>
				<a class="dropdown-item text-dark font-weight-bold" id = "Elder" href="<?php echo base_url();?>Welcome/ElderlyCare" >Elderly Care</a>
				<a class="dropdown-item text-dark font-weight-bold" id="Awareness" href="<?php echo base_url();?>Welcome/Awareness">Awareness Program</a>
				
			</div>
      </li>
	  <li class="nav-item dropdown">
        <a class="nav-link  text-dark font-weight-bold ml-3" href="#" id="navbardrop" data-toggle="dropdown">WHAT YOU CAN DO</a>
		 
			<div class="dropdown-menu dropdown-content ">
				<a class="dropdown-item text-dark font-weight-bold" id="Involve" href="<?php echo base_url();?>Welcome/GetInvolved">Get Involved</a>
				<a class="dropdown-item text-dark font-weight-bold" id="Friend" href="<?php echo base_url();?>Volunteer_form">Be A Friend</a>
				<a class="dropdown-item text-dark font-weight-bold" id= "SponsorChild" href="<?php echo base_url();?>Welcome/Sponsor_A_Child">Sponsor A Child</a>
				<a class="dropdown-item text-dark font-weight-bold" id="SponsorEvent" href="<?php echo base_url();?>Welcome/Sponsor_An_Event">Sponsor An Event</a>
				<a class="dropdown-item text-dark font-weight-bold" id = "CSR" href="<?php echo base_url();?>Welcome/CSR_Page" >Corporate Social Responsibility (CSR)</a>
				<a class="dropdown-item text-dark font-weight-bold" id="Donate" href="<?php echo base_url();?>Welcome/Donate">Donate</a>
				
				
			</div>
      </li>
	  <li class="nav-item ">
        <a class="nav-link text-dark font-weight-bold ml-3" id="Event&Press"href="#" >EVENT & PRESS </a>
      </li>
	  <li class="nav-item ">
        <a class="nav-link text-dark font-weight-bold ml-3" id ="ContactUs" href="<?php echo base_url();?>Welcome/ContactUs" >CONTACT US</a>
	  </li>
	  <li class="nav-item ">
        <a class="nav-link text-dark font-weight-bold ml-3" id ="DonateLink" href="<?php echo base_url();?>Welcome/Donate">DONATE</a>
	  </li>	
          
    </ul>
    
  </div>
</nav>
