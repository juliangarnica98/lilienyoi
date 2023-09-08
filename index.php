<?php
// index.php

$basePath = '/enyoiconlili.com';

// Obtener la URL solicitada
$requestUri = $_SERVER['REQUEST_URI'];
$uri = str_replace($basePath, '', $requestUri);



// Definir las rutas y sus correspondientes controladores y acciones
$routes = [
    '/administrativo' => 'AdministrativoController@index',
    '/cedi-comercial' => 'ComercialController@index',
];

// Buscar la ruta en el array de rutas
if (array_key_exists($uri, $routes)) {
    $route = $routes[$uri];
    [$controllerName, $action] = explode('@', $route);

    // Incluir el archivo del controlador
    require_once "controllers/{$controllerName}.php";

    // Crear una instancia del controlador y llamar a la acción
    $controller = new $controllerName();
    $controller->$action();
} else {
    http_response_code(404);
    echo "404 - Página no encontrada";
}
?>