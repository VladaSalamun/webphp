<?php

require ('functions.php');

$uri = parse_url($_SERVER['REQUEST_URI'])['path'];

$routes = [
    '/' => 'controllers/index.php',
    '/about' => 'controllers/about.php',
    '/contact' => 'controllers/contact.php'
];

if(array_key_exists($uri, $routes)) {
    include $routes[$uri];
}else {
    http_response_code(404);
    require 'views/404page.php';
}


public function dd($value) {
    echo "<pre>";
    var_dump($value);
    echo "</pre>";
}