<!doctype html>
<html>
<head>
<title>
<?
if($body=="news_body"){
  echo $spe_news["title"];
}else{
  echo $page_title;
}
?>
</title>
<link rel="icon" href="/hjlogo.ico" type="image/x-icon" />
<meta http-equiv="Content-Type" content="text/html; charset=<?=DBCHARSET?>" />
<?	
	if(is_array($meta_tags_data)){
			foreach($meta_tags_data  as $row){
				$line='<META '.$row['type'].'="'.$row['attribute'].'" content="'.$row['content'].'">'."\n";
				echo $line;
			}
	}
?>
<link rel="stylesheet" href="<?=$theme->themePath("css/style.css")?>" type="text/css"/>
<?if($body=="home"):?>
  <link rel="stylesheet" href="<?=$theme->themePath("css/home.css")?>" type="text/css"/>
<?endif;?>
<script language="javascript" src="<?=$theme->themePath("jscripts/jquery.js")?>"></script>
<script language="javascript" src="<?=$theme->themePath("jscripts/jquery-ui.js")?>"></script>
<script language="javascript">
  jQuery=jQuery.noConflict();
  jQuery(document).ready(function(){
     /**
	 * GET SCREENT WIDTH AND CALCULATE LEFT REPEAT WIDTH AND LEFT REPEAT WIDTH
	 */
      var sc_w=jQuery(window).width();
	  var menu_fix_w=jQuery(".version_info").width()+jQuery(".menu_container").width();
	  var repeat_w=(sc_w-menu_fix_w)/2;
	  jQuery(".left_repeat,.right_repeat").width(repeat_w);
     
	/**
	*Put Share Content In The Center
	*/
	  var s_h=jQuery(".share").height();
      var w_h=jQuery(window).height();
      var pos_t=(w_h-s_h)/2;
      jQuery(".share").css({"top":pos_t+"px"});	  
	
	/**
     *Add mouse event to share 
     */	
	 /*jQuery(".share").mouseenter(function(){
	     jQuery(this).children(".share_content").show("slow");
	  }).mouseleave(function(){
	     jQuery(this).children(".share_content").hide("slow");
		 });	 
  */
  
  });
  
</script>
</head>