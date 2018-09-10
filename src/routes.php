<?php

use Slim\Http\Request;
use Slim\Http\Response;

// Routes

$app->get('/[{name}]', function (Request $request, Response $response, array $args) {
    // Sample log message
    $this->logger->info("Slim-Skeleton '/' route");

    // Render index view
    echo "{'item1':'valor1'}"; 

	//$this->renderer->render($response, 'index.phtml', $args);
});

$app->get('/productos/{codigo}', function (Request $request, Response $response, array $args) {
    $name = $args['codigo'];
    $response->getBody()->write("producto1, $codigo");

    return $response;
});
