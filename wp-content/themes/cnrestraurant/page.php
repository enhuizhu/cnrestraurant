<?php get_header(); ?>

	<div class="container">
	     <div class="content-top">
		     <div class="seperate-img"></div>
		 </div>
	     
	 <?php if(have_posts()):?>
       <?php 
	       while(have_posts()):
	          the_post();     
	   ?>	 
        
		 
		 <div class="slide-panel-container">
		    <div class="listTopWrapperParent"> 
				  <div class="listTopWrapper">
				      <div class="menuLeft"></div>
				      <div class="slideTitleWrapper">
					    <?php the_title()?>
					  </div>
					  <div class="menuRight"></div>
					  <span class="clear"></span>
				  </div>
		    </div>
			<div class="content">
			   <?php the_content(); ?>
		    </div>
		 </div>
		 <?php endwhile;
		     endif;
		 ?>
	 </div>
     
 <?php get_footer();?>



