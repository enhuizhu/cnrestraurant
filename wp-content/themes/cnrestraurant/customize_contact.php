<?php
/*
Template Name: Contact Us
*/
?>

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
			     <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2483.423716516772!2d-0.08683000000000432!3d51.50544199999997!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x487603509c580b6f%3A0x335af388238f54bc!2sLondon+Bridge+Underground+Station!5e0!3m2!1sen!2suk!4v1407688307996" width="800" height="400" frameborder="0" style="border:0; width:100%"></iframe> 
			     
				 <div class="contact-detail">
				    
					<div class="address pull-left">
					  
					  <h3>Contact Information</h3>
					  </p>
					  London Bridge Underground Station<br>
                      London Bridge station<br>
                      Station Approach<br>
                      London, UK SE1 9SP, United Kingdom<br>
					  </p>
                      Email:info@olmarket.co.uk<br>
                      Telephone:07588732089<br>
					  Web:http://www.olmarket.co.uk<br>
				   
				    </div>
					
					<div class="contact-form pull-left">
					  <form action="">
					    <div class="row">
					      <input type="text" name="username" class="pull-left">
						  <label class="pull-left">NAME</label>
						  <div class="clear"></div>
						 </div>
						 
						 <div class="row">
					      <input type="text" name="username" class="pull-left">
						  <label class="pull-left">EMAIL</label>
						  <div class="clear"></div>
						 </div>
					     
						 <div class="row">
						    <textarea name="comment"></textarea>
						 </div>
						 
						 <div class="row">
						    <input type="submit" class="read-more">
						 </div>
					   
					   </form>
                    </div>
				   
				    <div class="clear"></div>
				   
				 </div>
				 
			   
			   
		    </div>
		 </div>
		 <?php endwhile;
		     endif;
		 ?>
	 </div>
     
 <?php get_footer();?>