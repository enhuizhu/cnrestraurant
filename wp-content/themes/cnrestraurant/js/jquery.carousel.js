/*
Plugin: jquery carousel
Author: Enhui Zhu
Description: a light carousel plugin for jquery
Author uri : http://www.olmarket.co.uk
*/
jQuery.fn.carousel=function(){
     /**
	 * @currentIndex, varible to trace the acitve slide
	 * @ANIMATIONTIME, const varible to save the animation time 
	 **/
	 var currentIndex = 0;
	 var ANIMATIONTIME = 1000;
	 var CAROUSEL_AUTOMATIC_TIME=3000;
	 
	 
	 
	 /**
	 * get all the child images, and set all the images opacity 0, except the active one 
	 **/
	 var childImages = jQuery(this).children("img"); 
	 var imgLength = childImages.length;
	 
	 
	 for(var i=0; i<imgLength;i++){
	     if(i!=currentIndex){
		     var currentImg = childImages[i];
			 jQuery(currentImg).css("opacity",0);
		 }
	 }
	 
	 
	 var fade=function(index,type){
	     var opacity=type=="in"?1:0;
		 var currentImg = childImages[index];
	     jQuery(currentImg).animate({"opacity":opacity},ANIMATIONTIME);
	 }
	 
	 
	 /**
	 * event handlar when user click the next button
	 **/
     var nextHandlar = function(){
         fade(currentIndex,"out");
	     currentIndex = (currentIndex+1) % imgLength;
		 fade(currentIndex,"in");
	}  

     /**
	 * event handlar when user click the previous button
	 **/
     var prevHandlar= function(){
		 fade(currentIndex,"out");
		 if(currentIndex==0){
		    currentIndex = imgLength -1;
		 }else{
		    currentIndex-=1;
		 }
	    
		fade(currentIndex,"in");
	 }
	 
     /**
	 * add event listenr to arrow, make the img can fade in and fade out
	 **/
	 
     jQuery(this).children(".right").bind("click",prevHandlar);
     jQuery(this).children(".left").bind("click",nextHandlar);

     /**
	 * make carousel running automaticly
	 **/
	 
	 setInterval(nextHandlar,CAROUSEL_AUTOMATIC_TIME);
	 
}
