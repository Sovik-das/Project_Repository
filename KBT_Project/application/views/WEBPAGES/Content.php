<!--Carousel Wrapper-->
<div id="carousel-example-2" class="carousel slide carousel-fade animated fadeInRight" data-ride="carousel">
  <!--Indicators-->
  <ol class="carousel-indicators">
    <li data-target="#carousel-example-2" data-slide-to="0" class="active"></li>
    <li data-target="#carousel-example-2" data-slide-to="1"></li>
    <li data-target="#carousel-example-2" data-slide-to="2"></li>
  </ol>
  <!--/.Indicators-->
  <!--Slides-->
  <div class="carousel-inner" role="listbox">
    <div class="carousel-item active">
      <div class="view">
        <img class="d-block w-100" src="<?php echo base_url(); ?>assets/img/NAVAJYOTI CRECHE (3).jpg" width="1600px" height="600px"
          alt="First slide">
        
      </div>
      <div class="carousel-caption">
        <h3 class="h3-responsive"><Strong>A Social Organization Serving Humanity</Strong></h3>
        
      </div>
    </div>
    <div class="carousel-item">
      <!--Mask color-->
      <div class="view">
        <img class="d-block w-100" src="<?php echo base_url(); ?>assets/img/MealPic_2.jpg" width="1600px" height="600px" 
          alt="Second slide">
        
      </div>
      <div class="carousel-caption">
        <h3 class="h3-responsive"><Strong>A Social Organization Serving Humanity</Strong></h3>
        
      </div>
    </div>
    <div class="carousel-item">
      <!--Mask color-->
      <div class="view">
        <img class="d-block w-100" src="<?php echo base_url(); ?>assets/img/SlumEdu_1.jpg" width="1600px" height="600px"
          alt="Third slide">
        
      </div>
      <div class="carousel-caption">
        <h3 class="h3-responsive"><Strong>A Social Organization Serving Humanity</Strong></h3>
        
      </div>
    </div>
  </div>
  <!--/.Slides-->
  <!--Controls-->
  <a class="carousel-control-prev" href="#carousel-example-2" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carousel-example-2" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
  <!--/.Controls-->
</div>
<!--/.Carousel Wrapper-->
	<!---Jumpbotron--->
	<div class="jumbotron text-center  pt-3">
		<div class="container-fluid">
			<h1 class="display-4" >About Us</h1>
			<p class="justify-content-center mx-5">
				<b>Kripa Benevolent Trust</b>
				is social welfare organization based in Kolkata, West Bengal, started its
				philanthropic work for the underprivileged since 2017 and registered under Trust Act  
				in March 2018. 

			</p>
			<button class="btn btn-primary" onclick ="window.location='<?php echo base_url("Welcome/AboutUs");?>'">Read more</button>
		</div>
	</div>
<!---Jumpbotron_End-->

<!-- Card -->
<div class="container-fluid text-center">
	<h1 class="display-4"> Our Causes</h1>
<div class="card-columns py-3">
  <div class="card ">
	<img class="card-img-top" src="<?php echo base_url(); ?>assets/img/SlumEdu_1.jpg" alt="Card image" height="190px" width="400px">
    <div class="card-body text-center">
		<h4 class="card-title">Education</h4>
      
	  <a href="#" class="btn btn-primary stretched-link" onclick ="window.location='<?php echo base_url("Welcome/FreeCoachingClass");?>'">Read More</a>
    </div>
  </div>
  <div class="card ">
	<img class="card-img-top" src="<?php echo base_url(); ?>assets/img/ElderlyPeople.jpg" alt="Card image" height="190px" width="400px" margin="0px">
    <div class="card-body text-center">
		
		<h4 class="card-title">Elderly Care</h4>
	
		<a href="#" class="btn btn-primary stretched-link" onclick ="window.location='<?php echo base_url("Welcome/ElderlyCare");?>'">Read More</a>
    </div>
  </div>
  <div class="card ">
	<img class="card-img-top" src="<?php echo base_url(); ?>assets/img/Skill_Development.jpg" alt="Card image" height="190px" width="400px">
    <div class="card-body text-center">
	  
		<h4 class="card-title">Skill Development Training</h4>	
      
	  <a href="#" class="btn btn-primary stretched-link" onclick ="window.location='<?php echo base_url("Welcome/LifeSkill_Project");?>'">Read More</a>
    </div>
  </div>
 </div> 
</div>
<!-- Card -->
