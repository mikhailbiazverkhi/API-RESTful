<?php

class Article
{

    private $conn;
    // private $table = 'article';

    public $id;
    public $titre;
    public $image;
    public $categorie;
    public $contenue;

    // public function __construct($db_conn)
    // {
    //     $this->conn = $db_conn;
    // }

    public function create()
    {

    }

    public function read()
    {
        return Database::getArticles();
    }

    public function update()
    {

    }

    public function delete()
    {

    }

}
