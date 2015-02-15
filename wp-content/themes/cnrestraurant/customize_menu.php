<?php
/*
Template Name: Menu
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
			   <?php 
			      //die(var_dump($myModel));
                  $products = $myModel->getItems();
                  //die(var_dump($products));
                  /**
                  * put it in new array which have category name as the key
                  **/
                  $productsWithCategory = array();
                  foreach($products as $product){
                      if(!isset($productsWithCategory[$product->category_name])){
                      	$productsWithCategory[$product->category_name]=array();
                      }
                      array_push($productsWithCategory[$product->category_name],$product);
                  }

                  //var_dump($productsWithCategory);
		       ?>
             <div class="food-menu">
              <?php foreach($productsWithCategory as $key=>$vals):?>
               <div class="category"><?php echo $key?></div>
                <ul class="menu-list">
                <?php foreach($vals as $val):?>
                   <?php //var_dump($val)?>
                 <li>
                 	<div class="dottline"></div>
                    <div class="item-name pull-left itemColor"><?php echo $val->product_name?></div>
                    <div class="price pull-right">&pound;<?php echo $val->product_price?></div>
                    <div class="clear"></div>
                 </li>     
                <?php endforeach;?>
               </ul>
              <?php endforeach;?>
             </div>
		    </div>
		 </div>
		 <?php endwhile;
		     endif;
		 ?>
	 </div>
     
 <?php get_footer();?>



