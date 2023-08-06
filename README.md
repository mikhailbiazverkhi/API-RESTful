# API-RESTful de la plateforme du Blog

### L'introduction
Transformation l'application backend existante (Plateforme du Blog vu dans le cours) en une application API RESTful orientée objet (TP#2).
### Caractéristiques
* Utilisateurs peut récupérer, créer, mettre à jour et supprimer des données des Blogs
### Guide d'installation
* Cloner ce référentiel [ici](https://github.com/mikhailbiazverkhi/API-RESTful.git).
* Importer la base de données des Blogs sur le serveur local:
  * Le script de la base de données "tp2_blog_db" est dans le dossier API-RESTful/Database_MySQL_sctript;
  * Il faut specifier le nom de la base de données, "root" et le mot de pass dans le fichier API-RESTful/includes/config.php.
* Ouvrir le projet "API RESTful" VS Code.
### Utilisation
* Exécutez `php -S localhost:3000` pour démarrer l'application en Terminal du VS Code.
* Connectez-vous à l'API à l'aide de Postman à l'aide de l'URI `http://localhost:3000/{api_endpoints}`.
### API Endpoints
| Verbes HTTP | Endpoints | Action | Paramètres
| --- | --- | --- | --- |
| POST | /api/articles_create | Pour créer un nouvel article | Body / form-data: titre, image (url), categorie, contenu
| GET | /api/articles | Pour récupérer tous les articles |
| GET | /api/articles/{id} | Pour récupérer l'article avec id |
| PUT | /api/update/{id} | Pour mettre à jour tout l'article avec id | Headers / Content-Type : application/json. Body / JSON: {"titre", "image", "categorie", "contenu"}
| PATCH | /api/update_title/{id} | Pour mettre à jour le titre de l'article avec id | Headers / Content-Type : application/json. Body / JSON: {"titre"}
| PATCH | /api/update_image/{id} | Pour mettre à jour l'image de l'article avec id | Headers / Content-Type : application/json. Body / JSON: {"image"}
| PATCH | /api/update_categorie/{id} | Pour mettre à jour la categorie de l'article avec id | Headers / Content-Type : application/json. Body / JSON: {"categorie"}
| PATCH | /api/update_contenu/{id} | Pour mettre à jour le contenu de l'article avec id | Headers / Content-Type : application/json. Body / JSON: {"contenu"}
| DELETE | /api/delete/{id} | Pour supprimer l'article avec id |
### Technologies utilisées
* [PHP](https://www.php.net/downloads.php) PHP (Hypertext Preprocessor) est un langage de scripts conçu pour le développement d'applications Web.
* [Composer](https://getcomposer.org/download/) Composer est un gestionnaire de dépendances pour les projets PHP. Il permet de gérer les bibliothèques et les packages nécessaires à votre application PHP en automatisant le processus de téléchargement, d'installation et de mise à jour des dépendances.
* [Slim Framework](https://www.slimframework.com/docs/v4/) Slim est un framework PHP léger et minimaliste conçu pour la création d'applications web et d'APIs (interfaces de programmation d'applications) RESTful.
This is a NodeJS web application framework.
* [MySQL Workbench and Server](https://dev.mysql.com/downloads/workbench/) est un outil de modélisation de BD qui intègre:
Le développement SQL, l’administration de BD, le design de BD, la création et la maintenance de BD.

### Auteurs
* [Mikhail Biazverkhi](https://github.com/mikhailbiazverkhi)
* [Nabil Boussefiane](https://github.com/mikhailbiazverkhi)