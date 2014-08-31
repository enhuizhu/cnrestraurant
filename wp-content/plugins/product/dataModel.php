<?php


/**
* db quotes
**/
if(!function_exists("dbQuotes")){
  function dbQuotes($value){
   return "'".mysql_real_escape_string($value)."'";
  }
}

/**
* all the function which manipulate the database will be here
**/

class dataModel{
	
	  private $db;

    public $error;

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

    /**
    * function to check if the given category already exist
    **/
    public function isCategoryExist($categoryName){
        $sql = "select count(*) as n from product_category where category_name=";
        $sql.= dbQuotes($categoryName);
        $result = $this->db->get_row($sql);
        return $result->n >0 ? true: false;
    }

    /**
    * function to add new category
    **/
    public function addNewCategory($categoryName){
       /**
       * should check if the category already in the db
       **/
       if($this->isCategoryExist($categoryName)) return true;

       $sql = "insert into product_category (category_name) values (";
       $sql.= dbQuotes($categoryName);
       $sql.=")";
       return $this->db->query($sql);
    }

    /**
    * function to get all the categories
    **/
    public function getAllCategories(){
        $sql = "select * from product_category";
        $results = $this->db->get_results($sql);
        return $results;
    }

    /**
    * function to delete specific category
    **/
    public function deleteCategory($categoryId){
        $sql = "delete from product_category where category_id =";
        $sql.= dbQuotes($categoryId);
        $this->db->query($sql);
        $this->deleteProductUnderCategory($categoryId);
        return $this->getAllCategories();
    }

    /**
    * delete product under specific category
    **/
    public function deleteProductUnderCategory($cid){
        $sql = "delete from products where category_id=".dbQuotes($cid);
        return $this->db->query($sql);
    }

    /**
    * update category name 
    **/
    public function updateCategoryName($cid,$cname){
         /**
         * should check if the new name already exist
         **/
         if($this->isCategoryExist($cname)){
            $this->error = "category already exist!";
            return false;
         }
         
         $sql = "update product_category set category_name=";
         $sql.= dbQuotes($cname);
         $sql.= " where category_id=".dbQuotes($cid);
        
         if($this->db->query($sql)){
             return $this->getAllCategories();
         }else{
             $this->error="sql error when update the category name.";
             return false;
         }

    } 
   
    /**
    * function to create products table
    **/
    public function createProductsTable(){
        
        if($this->isTableExsit("products")) return true;
        
        $sql="CREATE TABLE products(
             product_id int(10) AUTO_INCREMENT,
             product_name varchar(100),
             product_price float(8),
             category_id int(5),
             PRIMARY KEY (product_id)
          );";
        
        return $this->db->query($sql);

    }

    /**
    * function to check if the product already exist or not
    **/
    public function isProductExist($productName,$pid=false){
        $sql = "select count(*) as n from products";
        $sql .= " where product_name=".dbQuotes($productName);
        
        if($pid!=false){
          $sql .= " and product_id != ".dbQuotes($pid);
        }

        $result = $this->db->get_row($sql);
        return $result->n > 0 ? true:false;
    }

    /**
    * function to insert new product into product table
    **/
    public function addNewItem($cid,$name,$price){
        if($this->isProductExist($name)){
            $this->error="$name already exist!";
            return false;
        }

        $sql = "insert into products (product_name,product_price,category_id) values (";
        $sql.= dbQuotes($name).",";
        $sql.= dbQuotes($price).",";
        $sql.= dbQuotes($cid).")";
       
        if(!$this->db->query($sql)){
            $this->error="sql error!";
            return false;
        }
        return true;
    }

    /**
    * function to get all the products
    **/
    public function getItems(){
       $sql = "select * from products as a";
       /**
       * should connect it to product category talbe
       **/
       $sql.=" left join product_category as b";
       $sql.=" on a.category_id=b.category_id";
    
       /**
       * should sort it by category id
       **/
       $sql.=" order by b.category_id asc";




       
       return $this->db->get_results($sql);

    }

    /**
    * function to update the product
    **/
    public function updateProduct($productId,$productName,$productPrice){
      //should check if the product name already exist     
      if($this->isProductExist($productName,$productId)){
        $this->error  = "$productName already exist!";
        return false;
      }

      $sql = "update products set product_name=".dbQuotes($productName);
      $sql.= ", product_price=".dbQuotes($productPrice);
      $sql.=" where product_id=".dbQuotes($productId);

      if(!$this->db->query($sql)){
        $this->error="sql error!";
        return false;
      }
       
      return $this->getItems();

    }
    
    /**
    * function to delete the product
    **/
    public function deleteProduct($productId){
       $sql = "delete from products where product_id=".dbQuotes($productId);      
       $this->db->query($sql);
       return $this->getItems();
    }
}
