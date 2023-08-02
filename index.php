<?php

use DI\Container;
use Slim\Factory\AppFactory;
use Slim\Middleware\MethodOverrideMiddleware;
use \Psr\Http\Message\ResponseInterface as Response;
use \Psr\Http\Message\ServerRequestInterface as Request;

require_once __DIR__ . '/vendor/autoload.php';

// require_once __DIR__ . '/includes/config.php';

require_once __DIR__ . '/core/article.php';
require_once __DIR__ . '/core/dao.php';

$container = new Container();

$app = AppFactory::create(null, $container);

// Activation de la surcharge de méthode (dans le cas de DELETE)
$app->addRoutingMiddleware();
$app->add(MethodOverrideMiddleware::class);

//Ajout du middleware de parsing du corps des requêtes
$app->addBodyParsingMiddleware();

// TEST
$app->get('/hello/{name}', function (Request $request, Response $response, array $args) {
    $name = $args['name'];
    $response->getBody()->write("Hello, $name");
    return $response;
});

//Définition d'une route pour récupérer les articles

$app->get('/api/articles', function (Request $request, Response $response, array $args) /* use ($db)*/ {

    $article = new Article( /*$db*/);

    $result = $article->read();

// Vérification si des articles ont été trouvés
    if ($result->rowCount() > 0) {
        $posts = $result->fetchAll(PDO::FETCH_ASSOC);

        $response->getBody()->write(json_encode($posts));
        return $response->withHeader('Content-Type', 'application/json')->withStatus(200);
    } else {
        $response->getBody()->write(json_encode(['message' => 'No posts found.']));

        return $response->withHeader('Content-Type', 'application/json')->withStatus(404);
    }
});

//Définition d'une route pour récupérer les articles

$app->get('/api/article{id}', function (Request $request, Response $response, array $args) /* use ($db)*/ {

    $article = new Article( /*$db*/);

    $result = $article->read();

// Vérification si des articles ont été trouvés
    if ($result->rowCount() > 0) {
        $posts = $result->fetchAll(PDO::FETCH_ASSOC);

        $response->getBody()->write(json_encode($posts));
        return $response->withHeader('Content-Type', 'application/json')->withStatus(200);
    } else {
        $response->getBody()->write(json_encode(['message' => 'No posts found.']));

        return $response->withHeader('Content-Type', 'application/json')->withStatus(404);
    }
});

// Run the Slim app
$app->run();
