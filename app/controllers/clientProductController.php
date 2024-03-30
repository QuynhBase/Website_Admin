<?php 
    namespace Tranquynh\Handsome\controllers;
    use Tranquynh\Handsome\models\Product;

     

    class ClientProductController{
       
        function loadAllHome(){
            $load = new Product();
            $loadHome = $load -> loadallProduct_home();
            require_once "app/views/Client/sanphamHome.php";
            
        }

        function detailedProduct(){
            $idPd = $_GET['id'];
            $products = new Product();
      
            $getProduct = new Product();
            $product = $getProduct->loadone_product($idPd);
            require_once 'app/views/Client/detailedHome.php';
        }



        

    }



?>