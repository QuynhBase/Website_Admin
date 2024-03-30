<?php

use Phroute\Phroute\RouteCollector; 

$url = !isset($_GET['url']) ? "/" : $_GET['url'];

$router = new RouteCollector();

// filter check đăng nhập
$router->filter('auth', function(){
    if(!isset($_SESSION['auth']) || empty($_SESSION['auth'])){
        header('location: ' . BASE_URL . 'login');die;
    }
});


// bắt đầu định nghĩa ra các đường dẫn
$router->get('/', function(){
    return "trang chủ";
});


//định nghĩa đường dẫn trỏ đến Product Controller
// Category
$router->get('listCategory', [Tranquynh\Handsome\Controllers\ProductController::class, 'listCategory']);

$router->get('addCategory', [Tranquynh\Handsome\Controllers\ProductController::class, 'addview']);
$router->post('addCategory', [Tranquynh\Handsome\Controllers\ProductController::class, 'addCategory']);

$router->get('updateCategory', [Tranquynh\Handsome\Controllers\ProductController::class, 'getOne']);
$router->post('updateCategory', [Tranquynh\Handsome\Controllers\ProductController::class, 'updateCategory']);

$router->get('deleteCategory', [Tranquynh\Handsome\Controllers\ProductController::class, 'deleteCategory']);

// Product

$router->get('addProduct', [Tranquynh\Handsome\Controllers\ProductController::class, 'addviews']);
$router->post('addProduct', [Tranquynh\Handsome\Controllers\ProductController::class, 'addProduct']);

$router->get('listProduct', [Tranquynh\Handsome\Controllers\ProductController::class, 'listProduct']);

$router->get('updateProduct', [Tranquynh\Handsome\Controllers\ProductController::class, 'getOnePd']);
$router->post('updateProduct', [Tranquynh\Handsome\Controllers\ProductController::class, 'updateProduct']);

$router->get('deleteProduct', [Tranquynh\Handsome\Controllers\ProductController::class, 'deleteProduct']);


// Client
$router->get('loadHome', [Tranquynh\Handsome\controllers\ClientProductController::class, 'loadAllHome']);
$router->get('detailed', [Tranquynh\Handsome\controllers\ClientProductController::class, 'detailedProduct']);

// login
$router->get('loginAdd', [Tranquynh\Handsome\controllers\LoginProductController::class, 'listLogin']);
$router->get('addU', [Tranquynh\Handsome\controllers\LoginProductController::class, 'addView']);
$router->post('addU', [Tranquynh\Handsome\controllers\LoginProductController::class, 'addUser']);
$router->get('login', [Tranquynh\Handsome\controllers\LoginProductController::class, 'login']);
$router->post('login', [Tranquynh\Handsome\controllers\LoginProductController::class, 'login']);

// Login Admin

$router->get('loginView', [Tranquynh\Handsome\controllers\AdminProductController::class, 'loginAdminView']);
$router->post('loginView', [Tranquynh\Handsome\controllers\AdminProductController::class, 'loginAdmin']);

$router->get('loginAdminAdd', [Tranquynh\Handsome\controllers\AdminProductController::class, 'listLoginAdmin']);



# NB. You can cache the return value from $router->getData() so you don't have to create the routes each request - massive speed gains
$dispatcher = new Phroute\Phroute\Dispatcher($router->getData());

$response = $dispatcher->dispatch($_SERVER['REQUEST_METHOD'], $url);

// Print out the value returned from the dispatched function
echo $response;


?>