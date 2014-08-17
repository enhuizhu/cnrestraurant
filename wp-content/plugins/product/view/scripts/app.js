/**
* entry file of augular js app
**/

var foodMenu = angular.module('foodMenu', ['ngRoute']);

foodMenu.config(['$routeProvider',function($routeProvider){
      $routeProvider.when("/createCategory",{
      	templateUrl:pluginUrl("/views/createCategory.html"),
      	controller:"AddCategoryController"
      }).when("/",{
        templateUrl:pluginUrl("/views/welcome.html")
      }).when("/listCategory",{
      	templateUrl:pluginUrl("/views/listCategory.html"),
      	controller:"listCategoryController"
      });
   }]);


