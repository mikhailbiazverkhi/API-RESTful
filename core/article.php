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

    public function delete($id)
    {
        return Database::deleteArticle($id);
    }

    public function update($id, $titre, $image, $categorie, $contenu)
    {
        return Database::updateArticle($id, $titre, $image, $categorie, $contenu);
    }

    public function update_title($id, $titre)
    {
        return Database::updateArticleTitle($id, $titre);
    }

    public function update_image($id, $image)
    {
        return Database::updateArticleImage($id, $image);
    }

    public function update_categorie($id, $categorie)
    {
        return Database::updateArticleCategorie($id, $categorie);
    }

    public function update_contenu($id, $contenu)
    {
        return Database::updateArticleContenu($id, $contenu);
    }

}
