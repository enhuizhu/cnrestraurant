<?php
/*
Plugin Name: Product
Plugin URI: http://www.olmarket.co.uk
Description: plugin to manage products
Version: 1.0
Author URI: http://www.olmarket.co.uk
*/


include "view.php";
include "dataModel.php";
include "api.php";

$myView = new view();
$myModel= new dataModel();

$myModel->createProductCategoryTable("product_catogory");
$myModel->createProductsTable("createProductsTable");

//$testresult=$myModel->isProductExist("test");
//die(var_dump($testresult));

function clients_admin_action(){
       add_menu_page("Food Menu Management", "Food Menu Management", 1, "Food Menu Management", "product_admin");
}
 
add_action('admin_menu', 'clients_admin_action');


function product_admin(){
    global $myView;
    global $myModel;
    $myView->display("index");
}







