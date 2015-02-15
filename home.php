<script language="javascript">
 jQuery(document).ready(function(){
  /**
  *Load content into the second news box
  */
  jQuery("#second_new_box").html(jQuery("#first_new_box").html());
 var h = setInterval("news_scroll()",200);
  jQuery(".news_body").mouseenter(function(){
     clearInterval(h);
  }).mouseleave(function(){
     h = setInterval("news_scroll()",200);
  });

  
  
  
  /**
  *Load content into the second box
  */
   jQuery.ajax({
     url:"/homePage/getcarousel/",
	 beforeSend:function(){
	   jQuery("#bullet_con").html("<img src='<?=$theme->themePath("css/images/287.gif")?>' width='20'>");
	   jQuery("#firstbox").html("laoding...... 0%");
	 },
     success:function(data){
	   var car_data=JSON.parse(data);
	   var carousels=new Array();
	   var sum=0;
	   for(var i=0;i<car_data.length;i++){
	      carousels[i]=new Image();
		  carousels[i].src="/images/carousel/"+car_data[i].image_filename;
		  carousels[i].onload=function(){
		     sum++;
			 jQuery("#firstbox").html("loading......"+(sum/car_data.length*100).toFixed(2)+"%");
		     if(sum==car_data.length){
			    jQuery("#bullet_con").html("")
			    jQuery("#firstbox").html("");
			   display_pics(carousels);
			 }
		  }
	   }
	 }
   })

  });
  
 

  function news_scroll(){
	 var max_scroll_top=jQuery('.news_body')[0].scrollHeight- jQuery(".news_body").height();
	 var view_height=jQuery(".news_body").height();
     var content_height=jQuery("#first_new_box").height();
     var max_scroll_first_top=content_height-view_height;
     var current_top=jQuery(".news_body").scrollTop();
     if(current_top>=max_scroll_top){
	    current_top = max_scroll_first_top; 
		jQuery(".news_body").scrollTop(current_top);
	 }
        current_top+=2;
     jQuery(".news_body").scrollTop(current_top);
  }
  
  function display_pics(carousels){
     for(var i=0;i<carousels.length;i++){
	    jQuery("#firstbox").append("<img src='"+carousels[i].src+"'>");
	 }
	 activecar();
  }
  
  function activecar(){
  jQuery("#secondbox").html(jQuery("#firstbox").html());
  var img_width=654;
  var imgs_number=jQuery("#firstbox").children("img").length;
  var imgs_w=imgs_number*img_width*2;
  var current_img=1;
  jQuery("#img_con").width(imgs_w);
  
  /**
  * start auto scrolling
  **/  
  automove(imgs_number,img_width);
  
  /*jQuery(".left_arrow").click(function(){
     var current_left=jQuery(".carousel").scrollLeft();
	 if(current_left<=0){
	   current_left=imgs_number*img_width;
	   jQuery(".carousel").scrollLeft(current_left);
	 }
	 var now_left=current_left-img_width;
	 jQuery(".carousel").animate({
	     scrollLeft:now_left
	  },1000,function(){
	    current_img=(now_left/img_width)%imgs_number+1;
	    moveto(current_img);
	  });
   });
  
  jQuery(".right_arrow").click(function(){
     var current_left=jQuery(".carousel").scrollLeft();
	 if(current_left>=(imgs_number*2-1)*img_width){
	     current_left=current_left-(imgs_number)*img_width;
		 jQuery(".carousel").scrollLeft(current_left);
	 }
	 var now_left=current_left+img_width;
	   jQuery(".carousel").animate({
	     scrollLeft:now_left
	  },1000,function(){
	   current_img=(now_left/img_width)%imgs_number+1
	   moveto(current_img);
	  });	
      	 
 
   });*/
    
  }
  
  function automove(imgs_number,img_width){
     var current_left=jQuery(".carousel").scrollLeft();
	 if(current_left>=(imgs_number*2-1)*img_width){
	     current_left=current_left-(imgs_number)*img_width;
		 jQuery(".carousel").scrollLeft(current_left);
	 }
	 var now_left=current_left+img_width;
	   jQuery(".carousel").animate({
	     scrollLeft:now_left
	  },1000,function(){
	   current_img=(now_left/img_width)%imgs_number+1
	   //moveto(current_img);
	  });
	  
	  setTimeout("automove("+imgs_number+","+img_width+")",3000);
  }
  
  function moveto(n){
     jQuery("#bullet_con").children("li").removeClass("active");
	 jQuery("#bullet_con").children("li:nth-child("+n+")").addClass("active");
   }
   
   window.onload=function(){
      var about=jQuery("#about_us").height();
      var news=jQuery("#news").height();
      max=about>news?about:news;
      jQuery("#about_us,#news").height(max);
   }
</script>
<div class="homeadv small_block">
  <div id="top_slide">
      <div class="news_board">
	    <div class="news_body">
		  <div id="new_con">
		     <div id="first_new_box">
			   <?foreach($news as $new):?>
			     <p>
				   <a href="/<?=$alias["news"]["url"]?>/content/?news_id=<?=$new["id"]?>">
				       <span style="color:lightblue;"><?=date_string($new["news_date"],$current_lang)?></span></br>
					   <p><span style="font-weight:bolder"><?=$new["title"]?></span></p>
					   <p style="font-size:12px;"><?=format_title(strip_tags($new["content"]),120)?></p>
				   </a>
				 </p>
			   <?endforeach;?>
			 </div>
			 <div id="second_new_box">
			 
			 </div>
		  </div>
		  
		</div>
	  </div>
      <div class="carousel">
	   <div id="img_con">
	   <span id="firstbox">
	  
	   </span>
	   <span id="secondbox">
	    
	   </span>
	   </div>
	  </div>
	  <div class="clear"></div>
 </div>

 <div id="blockwrapper">
   <table width="100%" cellspacing="0">
	   <tr>
	     <td width="50%">
		    <div id="about_us">
			<?
			/*<div class="block_title about_us">
			  <?=$lang["home"]["about_us"]?>
			</div>
			*/?>
			<div class="block_body">
			  <div class="content_body">
			     <?
				   $content=strip_tags($lang["about_us"]["about_us_content"]);
				   echo substr($content,0,strlen($content)/2+19);    
				 ?>
			    
			  </div>
			<?/*  <div class="readmore">
			      <div class="btn" style="text-align:center;"><a href="/<?=$alias["about_us"]["url"]?>"><?=$lang["home"]["readmore"]?></a></div>
			  </div>
			  <div class="clear"></div>
			  */?>
			</div>
			</div>
		 </td>
		 
		 <td width="50%">

		   <div id="news" style="float:right; margin-right: 61px;">
		   
		   <?
		   /* <div class="block_title news"><?=$lang["home"]["latestnews"]?></div>
            <div style="margin-top:10px;">
			  <div style="float:left;padding-left:28px;"><img src="<?=$theme->themePath("css/images/internet-news-reader.png")?>"></div>
			  <div style="float: left; padding-left: 23px; text-align: left; width: 204px;"><a href="/<?=$alias["news"]["url"]?>/content/?news_id=<?=$news[0]["id"]?>" style="text-decoration:none;"><?=format_title(strip_tags($news[0]["content"]),170)?></a></div>
			  <div class="clear"></div>
			</div>
			 */?>
			
			<div class="block_body">
			  <div class="content_body">
				  
				  <?/*<ul>
				  <?foreach($news as $new):?>
				  <li>
				    <label class="news_title"><a href="/<?=$alias["news"]["url"]?>/content/?news_id=<?=$new["id"]?>"><?=format_title($new["title"],30)?></a></label>
				    <label class="news_date"><?=date_string($new["news_date"],$current_lang)?></label>
				  </li>
				  <div class="clear"></div>
				  <?endforeach;?>
				  </ul>
				  */
				  echo substr($content,strlen($content)/2+19,strlen($content));
				  ?>
			   
			  </div>
			  <div class="readmore">
			      <div class="btn"><a href="/<?=$alias["about_us"]["url"]?>"><?=$lang["home"]["readmore"]?></a></div>
			  </div>
			   <div class="clear"></div>
			</div>
			</div>
		 </td>
		<? 
		 /*<td width="33.3%" style="text-align:right">
		    <div class="small_block" style="float:right;" id="contact"> 
			<div class="block_header">
			  <div class="heaer_contnet contact"><?=$lang["home"]["contact_us"]?></div>
			  <div class="header_line"></div>
			</div>
			<div class="block_body">
			  <div class="content_header">
			    <img src="<?=$theme->themePath("css/images/home/contact_girl.png")?>" width="280">
			  </div>
			</div>
			
			<div class="content_body">
			<table id="contact_tab">
			   <tr>
			   <td><img src="<?=$theme->themePath("css/images/home/telephone.png")?>"><?=$lang["home"]["tel"]?></td>
			   <td>01784 243626</td>
			   </tr>
			   	   <tr>
			   <td><img src="<?=$theme->themePath("css/images/home/fax.png")?>"><?=$lang["home"]["fax"]?></td>
			   <td>08452802232</td>
			   </tr>
			   <tr>
			   <td><img src="<?=$theme->themePath("css/images/home/send.png")?>"><?=$lang["home"]["email"]?></td>
			   <td>info@hjtenger.co.uk</td>
			   </tr>
			   <tr>
			   <td><img src="<?=$theme->themePath("css/images/home/address.png")?>"><?=$lang["home"]["address"]?></td>
			   <td style="width:180px;"><?=$lang["home"]["address_con"]?></td>
			   </tr>
			
			</table>
		    </div>
			<div class="block_footer">
			</div>
			</div>
		 </td>*/
		 ?>
	   </tr>
   </table>
 </div>

</div>
 