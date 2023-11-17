<?php

require_once __DIR__ . '/Router.php';
require_once __DIR__ . '/Exceptions.php';
require_once __DIR__ . '/Home.php';
require_once __DIR__ . '/Invoices.php';

// echo '<pre>';
// print_r(explode('?' , $_SERVER['REQUEST_URI'])[0]);
// echo '<pre>';

$router = new App\Router();

// $router->register('/',
//     function (){
//         echo 'Home';
//     }
// );

// $router->register('/invoices',
//     function (){
//         echo 'Invoices';
//     }
// );

//echo $_SERVER['REQUEST_URI'];
// echo $router->resolve($_SERVER['REQUEST_URI']);

// There is a better way:
$router->get('/', [App\Classes\Home::class, 'index'])
    ->get('/invoices', [App\Classes\Invoices::class, 'index'])
    ->get('/invoices/create', [App\Classes\Invoices::class, 'create'])
    ->post('/invoices/create', [App\Classes\Invoices::class, 'store']);
    
var_dump($_POST);
var_dump($_SERVER['REQUEST_METHOD']);
echo $router->resolve($_SERVER['REQUEST_URI'], strtolower($_SERVER['REQUEST_METHOD']));