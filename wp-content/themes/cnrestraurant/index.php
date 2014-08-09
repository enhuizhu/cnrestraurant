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
			      <a href="#" class="active">HOME</a>
			      <a href="#">MENU</a>
			      <a href="#">CONTACT US</a>
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
     <div class="container">
	     <div class="content-top">
		     <div class="seperate-img"></div>
		 </div>
	     
		 <div class="slide-panel-container">
		    <div class="slide">
			    <div class="listTopWrapperParent"> 
				  <div class="listTopWrapper">
				      <div class="menuLeft"></div>
				      <div class="slideTitleWrapper">MENU</div>
					  <div class="menuRight"></div>
					  <span class="clear"></span>
				  </div>
				 </div>
				 
				 <div class="slide-img">
				    <img src="<?php echo get_template_directory_uri()."/images/carousel/stoneMatrix.png"?>">
				 </div>
				 
				
				 <div class="slide-description">
			       The sliding menucard will surely impress your customers! Set up several pages and display them side by side, just as on a paper menucard!
			      <br>
				  <div class="read-more">
				      Read more
				  </div>
				  </div>
				
			</div>
		     
			<div class="slide">
			    <div class="listTopWrapperParent"> 
				  <div class="listTopWrapper">
				      <div class="menuLeft"></div>
				      <div class="slideTitleWrapper">CONTACT US</div>
					  <div class="menuRight"></div>
					  <span class="clear"></span>
				  </div>
				 </div>
				 
				 <div class="slide-img">
				    <img src="<?php echo get_template_directory_uri()."/images/carousel/stoneMatrix.png"?>">
				 </div>
				 
				
				 <div class="slide-description">
			       The sliding menucard will surely impress your customers! Set up several pages and display them side by side, just as on a paper menucard!
			      <br>
				  <div class="read-more">
				      Read more
				  </div>
				  </div>
				
			</div>
			
			<div class="clear"></div>
		 </div>
	 </div>
     
	 <div class="copyright">
	    Copyright &copy; 2014 The Restaurant - Made by <a href="http://www.olmarket.co.uk">Online Marketing Solution</a>
	  </div>
	 
	 
	 
	 
	 <script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
	 <script language="javascript" src="<?php echo get_template_directory_uri()."/js/jquery.carousel.js"?>"></script>
	 <script language="javascript">
	     jQuery(document).ready(function(){
		     jQuery(".carouselContainer").carousel();
		 });
	 </script>
	 
  </body>
</html>


