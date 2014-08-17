<?php

/**
* all the function which manipulate the database will be here
**/

class dataModel{
	
	private $db;

    function __construct(){
         global $wpdb;
    	 $this->db = $wpdb;
    }

    
    /**
    * function to check if the table exsit
    **/
    public function isTableExsit($table){
    	$sql="show tables like '$table'";
    	$result = $this->db->get_results($sql);
    	return empty($result)?false:true;
    }



    /**
    * function to create product category
    **/
    public function createProductCategoryTable(){
        
        if($this->isTableExsit("product_category")) return true;
        
        $sql="CREATE TABLE product_category(
             category_id int(5) AUTO_INCREMENT,
             category_name varchar(100),
             PRIMARY KEY (category_id)
          );";
        
        return $this->db->query($sql);

    }
     






}

