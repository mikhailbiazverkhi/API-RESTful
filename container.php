<?php
use DI\Container;
use Psr\Container\ContainerInterface;

// Instanciez le conteneur de dépendances
$container = new Container();
// Configurer les dépendances
// Exemple de configuration d'une dépendance pour la classe Article
$container->set('Article', function (ContainerInterface $container) {

    return new Article();
});
// Ajoutez d'autres configurations de dépendances selon vos besoins
// Retournez le conteneur
return $container;
