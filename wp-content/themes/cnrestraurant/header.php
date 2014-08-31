<!doctype html>
<html>
  <head>
     <title>Chinese Restraurant</title>
     <link rel="stylesheet" type="text/css" href="<?php bloginfo("stylesheet_url")?>">
  </head>
  <body>
     <div class="head">
	      <div class="siteTitle">
		       <div class="bigTitle">梨花園</div>
		       LEE GARDEN CAFE & RESTRAURANT
		  </div>
		  
		  <div class="restraurantAward">
               Tel:01482 872832	  
		  </div>
     </div>
	 
	 <!-- container for the menu and carousel -->
	  <div class="carouselParent">
	     
		 <div class="carouselContainer">
		     <img src="<?php echo get_template_directory_uri()."/images/carousel/main.jpg"?>">
			 <img src="<?php echo get_template_directory_uri()."/images/carousel/dish1.jpg"?>">
			 <img src="<?php echo get_template_directory_uri()."/images/carousel/dish2.jpg"?>">
			 <img src="<?php echo get_template_directory_uri()."/images/carousel/dish3.jpg"?>">
			 <img src="<?php echo get_template_directory_uri()."/images/carousel/dish4.jpg"?>">
			 <div class="arrow left"></div>
			 <div class="arrow right"></div>
		 </div>
	     
		 <div class="navigation">
		     <div class="menuLeft"></div>
			 <div class="navList">
			      <div class="star-parent">
				      <div class="star"></div>
				      <div class="star"></div>
				      <div class="star"></div>
				      <div class="star"></div>
				      <div class="star"></div>
				  </div>
				  <?php wp_nav_menu( array( 'theme_location' => 'header-menu',"container_class" => "header-menu" ) ); ?>
				  <div class="star-parent pull-right">
				      <div class="star"></div>
				      <div class="star"></div>
				      <div class="star"></div>
				      <div class="star"></div>
				      <div class="star"></div>
				  </div>
				  
			 </div>
		     <div class="menuRight"></div>
		 </div>
	  </div>
	 <!-- end container for the menu and carousel -->