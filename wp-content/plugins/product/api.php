<?php
/**
* all the angular api request come here
**/
add_action("wp_ajax_addCategory", "addCategory");
add_action("wp_ajax_nopriv_addCategory", "addCategory");
if(!function_exists("addCategory")){
	   function addCategory(){
	           //die("try to add new category");
	           global $myModel;
	           $categoryName = $_POST["categoryName"];
               if($myModel->addNewCategory($categoryName)){
                   $response = array("success"=>true, "message"=>"category has been created successfully!");
               }else{
                   $response = array("success"=>false, "message"=>"some error happen when try to add new category");
               }
               echo json_encode($response);
               die();
	   }
}

/**
* function to get all the categories
**/
add_action("wp_ajax_getAllCatogries", "getAllCatogries");
add_action("wp_ajax_nopriv_getAllCatogries", "getAllCatogries");
if(!function_exists("getAllCatogries")){
	   function getAllCatogries(){
	           global $myModel;
	           $results = $myModel->getAllCategories();
	           echo json_encode($results);
	           die();
	           
	   }
}

/**
* function to delete specific category
**/
add_action("wp_ajax_deleteCategory", "deleteCategory");
add_action("wp_ajax_nopriv_deleteCategory", "deleteCategory");
if(!function_exists("deleteCategory")){
	   function deleteCategory(){
	           global $myModel;
	           $results = $myModel->deleteCategory($_POST["categoryId"]);
	           echo json_encode($results);
	           die();  
	   }
}

/**
* function to update category name
**/
add_action("wp_ajax_updateCategoryName", "updateCategoryName");
add_action("wp_ajax_nopriv_updateCategoryName", "updateCategoryName");
if(!function_exists("updateCategoryName")){
	   function updateCategoryName(){
	           global $myModel;
	           $results = $myModel->updateCategoryName($_POST["categoryId"],$_POST["categoryName"],$_POST["pos"]);
	           //var_dump($results);
               if($results==false){
	           	 echo json_encode(array("error"=>true,"message"=>$myModel->error));
	           }else{
	             echo json_encode($results);	
	           }          
	           die();  
	   }
}

/**
* function to add new item
**/
add_action("wp_ajax_addNewItem", "addNewItem");
add_action("wp_ajax_nopriv_addNewItem", "addNewItem");
if(!function_exists("addNewItem")){
	   function addNewItem(){
               //die(var_dump($_POST));
	           global $myModel;
	           $results = $myModel->addNewItem($_POST["cid"],$_POST["productName"],$_POST["productPrice"]);
	           //var_dump($results);
               if($results==false){
	           	 echo json_encode(array("error"=>true,"message"=>$myModel->error));
	           }else{
	             echo json_encode(array("error"=>false,"message"=>"new item hass been added successfully"));	
	           }          
	           die();  
	   }
}

/**
* function to get all the items
**/
add_action("wp_ajax_getItems", "getItems");
add_action("wp_ajax_nopriv_getItems", "getItems");
if(!function_exists("getItems")){
	   function getItems(){
               //die(var_dump($_POST));
	           global $myModel;
	           $results = $myModel->getItems();
	           echo json_encode($results);       
	           die();  
	   }
}

/**
* function to update the product
**/
add_action("wp_ajax_updateProduct", "updateProduct");
add_action("wp_ajax_nopriv_updateProduct", "updateProduct");
if(!function_exists("updateProduct")){
	   function updateProduct(){
               //die(var_dump($_POST));
	           global $myModel;
	           $results = $myModel->updateProduct($_POST["productId"],$_POST["productName"],$_POST["productPrice"]);
	           if($results==false){
	           	echo json_encode(array("error"=>true,"message"=>$myModel->error));
	           }else{
	            echo json_encode($results);  	
	           }
	           die();  
	   }
}

/**
* function to delete the product
**/
add_action("wp_ajax_deleteProduct", "deleteProduct");
add_action("wp_ajax_nopriv_deleteProduct", "deleteProduct");
if(!function_exists("deleteProduct")){
	   function deleteProduct(){
               //die(var_dump($_POST));
	           global $myModel;
	           $results = $myModel->deleteProduct($_POST["productId"]);
	           echo json_encode($results);  	
	           die();  
	   }
}

