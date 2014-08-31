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
			   <?php //the_content(); ?>
              <div class="block-text">
              	   <div class="block-title">Contact Info:</div>
              	   <div class="block-content">
                      <strong>Address:</strong>
                      29-31 North Bar Within, Beverley, East Riding of Yorkshire, HU17 8DB
                      <br>
                      <strong>Telephone No.:</strong>01482 872832
              	   </div>
              </div>

              <div class="block-text">
              	   <div class="block-title">Opening Hours:</div>
              	   <div class="block-content">
                      <strong>5:30pm-11:00pm &nbsp;</strong>
                      Sunday to Thursday
                      <br>
                      <strong>5:30pm-11:30pm &nbsp;</strong>Friday & Saturday
              	   </div>
              </div>

               <div class="block-text">
              	   <div class="block-title">About Lee Garden</div>
              	   <div class="block-content">
                      Located at the town centre of Beverley, the beautiful historic town in East Riding of Yorkshire, The Lee Garden Chinese Restaurant is directly opposite the town’s rather grand St. Mary’s Church.
The restaurant is spread over two floors in a variety of large and small rooms. Apart from a terrific atmosphere and most enjoyable surroundings, it’s also one of the friendliest restaurants.
If there’s one reason for visiting this particular establishment it has to be the food. As Beverley’s only sit-down Chinese Restaurant specialising in genuine oriental cuisine, The Lee Garden not only offers a fine menu of a good selection of standard dishes but also offers black-board fish and seafood specialities which make choosing your food that much more enjoyable. We promise that The Lee Garden is the restaurant where you actually leave at the end of the evening appreciating what’s so special about Chinese cuisine.
              	   </div>
              </div>
		    </div>
		 </div>
		 <?php endwhile;
		     endif;
		 ?>
	 </div>
     
 <?php get_footer();?>



