<?php
    // điều hướng các phương thức từ controller
    // require_once 'controllers/productController.php';
    // use Tranquynh\Handsome\controllers\ProductController;
    
        include 'Admin/header.php';
        include 'Admin/home.php';    
    // include 'Admin/footer.php';
    

    require_once 'vendor/autoload.php';
    require_once 'app/common/route.php';

    // $url = isset($_GET['url'])==true?$_GET['url']:"/";

    // switch($url){
    //     case '/';
    //     $productController = new ProductController();
    //     $productController->listProduct();
    //     break;
    // }

?>