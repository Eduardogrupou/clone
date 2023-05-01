<?php
require_once 'vendor/autoload.php'; // carrega as dependências
$dispatcher = FastRoute\simpleDispatcher(function(FastRoute\RouteCollector $r) {
    require 'routes/web.php'; // carrega as rotas
});
$httpMethod = $_SERVER['REQUEST_METHOD'];
$uri = $_SERVER['REQUEST_URI'];
$routeInfo = $dispatcher->dispatch($httpMethod, $uri);
switch ($routeInfo[0]) {
    case FastRoute\Dispatcher::NOT_FOUND:
        // Trata rota não encontrada
        break;
    case FastRoute\Dispatcher::METHOD_NOT_ALLOWED:
        // Trata método não permitido
        break;
    case FastRoute\Dispatcher::FOUND:
        $handler = $routeInfo[1];
        $vars = $routeInfo[2];
        // Chama o controlador e a ação correspondente
        call_user_func_array($handler, $vars);
        break;
}
?>