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
$app->get('/api/articles', function (Request $request, Response $response, array $args) {

    $article = new Article();
    $result = $article->read();

// Vérification si des articles ont été trouvés
    if ($result->rowCount() > 0) {
        $articles = $result->fetchAll(PDO::FETCH_ASSOC);
        $response->getBody()->write(json_encode($articles));
        return $response->withHeader('Content-Type', 'application/json')->withStatus(200);
    } else {
        $response->getBody()->write(json_encode(['message' => 'No articles found.']));
        return $response->withHeader('Content-Type', 'application/json')->withStatus(404);
    }
});

//Définition d'une route pour récupérer l'article avec {id}
$app->get('/api/articles/{id}', function (Request $request, Response $response, array $args) /* use ($db)*/ {

    $id = $args['id'];

    $article = new Article();
    $result = $article->read($id);

// Vérification si des articles ont été trouvés
    if ($result->rowCount() > 0) {
        $posts = $result->fetchAll(PDO::FETCH_ASSOC);

        $response->getBody()->write(json_encode($posts));
        return $response->withHeader('Content-Type', 'application/json')->withStatus(200);
    } else {
        $response->getBody()->write(json_encode(['message' => 'No article found.']));

        return $response->withHeader('Content-Type', 'application/json')->withStatus(404);
    }
});

//Définition d'une route pour créer un article
$app->post('/api/articles_create', function (Request $request, Response $response) {

    $articleData = $request->getParsedBody();

    extract($articleData);

    // Valider les données de l'article
    if (empty($titre) || empty($image) || empty($categorie) || empty($contenu)) {
        $response->getBody()->write(json_encode(['message' => 'les paramètres d\'un article ne sont pas corrects']));
        return $response->withHeader('Content-Type', 'application/json')->withStatus(400);
    } else {
        $article = new Article();
        $article->create($titre, $image, $categorie, $contenu);
        $response->getBody()->write(json_encode(['success' => 'un article est ajouté']));
        return $response->withHeader('Content-Type', 'application/json')->withStatus(200);
    }
});

//Définition d'une route pour supprimer un article
$app->delete('/api/delete/{id}', function (Request $request, Response $response, $args) {

    $id = $args['id'];

    $article = new Article();
    //if
    $article->delete($id); //{

    $data = ['message' => 'Article deleted successfully'];
    $response->getBody()->write(json_encode($data));
    return $response->withHeader('Content-Type', 'application/json')->withStatus(200);
    // } else {
    //     $data = ['message' => 'Failed to delete article'];
    //     $response->getBody()->write(json_encode($data));
    //     return $response->withHeader('Content-Type', 'application/json')->withStatus(500);
    // }
});

//Définition d'une route pour mettre à jour un article
$app->put('/api/update/{id}', function (Request $request, Response $response, $args) {

    $id = $args['id'];

    $data = $request->getParsedBody();
    $titre = $data['titre'] ?? '';
    $image = $data['image'] ?? '';
    $categorie = $data['categorie'] ?? '';
    $contenu = $data['contenu'] ?? '';

    $article = new Article();

    // if (
    $article->update($id, $titre, $image, $categorie, $contenu); //) {
    $data = ['message' => 'Article updated successfully'];
    $response->getBody()->write(json_encode($data));
    return $response->withHeader('Content-Type', 'application/json')->withStatus(200);
    // } else {
    //     $data = ['message' => 'Failed to update article'];
    //     $response->getBody()->write(json_encode($data));
    //     $response->withHeader('Content-Type', 'application/json')->withStatus(500);
    // }

});

// Run the Slim app
$app->run();
