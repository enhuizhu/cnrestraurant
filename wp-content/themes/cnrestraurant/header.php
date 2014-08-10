<!doctype html>
<html>
  <head>
     <title>Chinese Restraurant</title>
     <link rel="stylesheet" type="text/css" href="<?php bloginfo("stylesheet_url")?>">
  </head>
  <body>
     <div class="head">
	      <div class="siteTitle">
		       BEST CHINESE RESTRAURANT
		  </div>
		  
		  <div class="restraurantAward">
               Fatanstic Restraurant Ever!		  
		  </div>
     </div>
	 
	 <!-- container for the menu and carousel -->
	  <div class="carouselParent">
	     
		 <div class="carouselContainer">
		     <img src="<?php echo get_template_directory_uri()."/images/carousel/stoneMatrix.png"?>">
			 <img src="<?php echo get_template_directory_uri()."/images/carousel/1.gif"?>">
			 <img src="<?php echo get_template_directory_uri()."/images/carousel/2.gif"?>">
			 <img src="<?php echo get_template_directory_uri()."/images/carousel/3.gif"?>">
			 <img src="<?php echo get_template_directory_uri()."/images/carousel/4.gif"?>">
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