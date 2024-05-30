<?php
$uri = parse_url($_SERVER['REQUEST_URI'])['path'];

$routes = [
    '/' => 'controllers/index.php',
    '/clientes' => 'controllers/clientes.php',
    '/empleados' => 'controllers/empleados.php',
];

function routeToPage($uri,$routes) {

    if (array_key_exists($uri,$routes)) {
        require $routes[$uri];
    } else {
        abort();
    };
};

function abort($error_code = 404) {
    http_response_code($error_code);
    require "views/$error_code.php";
    die();
};

routeToPage($uri,$routes);

