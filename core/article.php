<?php

class Article
{

    public function create($titre, $image, $categorie, $contenu)
    {
        return Database::addArticle($titre, $image, $categorie, $contenu);
    }

    public function read($id = null)
    {
        if ($id === null) {
            return Database::getArticles();
        } else {
            return Database::getArticle($id);
        }
    }

    public function update($id, $titre, $image, $categorie, $contenu)
    {
        return Database::updateArticle($id, $titre, $image, $categorie, $contenu);
    }

    public function delete($id)
    {
        return Database::deleteArticle($id);
    }

}
