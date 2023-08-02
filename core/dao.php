<?php

function query($sql)
{

    // Database connection paramettres
    $servername = 'localhost';
    $username = 'root';
    $password = '$Mike1q2w3e4R';
    $db_name = 'tp2_blog_db';

    try {
        $conn = new PDO("mysql:host=$servername;dbname=$db_name", $username, $password);
        $conn->setAttribute(PDO::ATTR_EMULATE_PREPARES, false);
        $conn->setAttribute(PDO::MYSQL_ATTR_USE_BUFFERED_QUERY, true);
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

        // echo "Connected successfully";
        $stmt = $conn->prepare($sql);
        $stmt->execute();

        return $stmt;

    } catch (PDOException $ex) {
        throw $ex;
    }
}

class Database
{

    public static function addArticle($titre, $image, $categorie, $contenu)
    {

        $sql = "INSERT INTO article VALUES (Default, '$titre', '$image', '$categorie', '$contenu')";

        try {
            query($sql);
        } catch (PDOException $ex) {
            throw $ex;
        }
    }

    public static function getArticles()
    {
        $sql = "SELECT * FROM article";
        //$stmt = query($sql);
        try {
            return query(($sql));
            //return $stmt->fetchAll(PDO::FETCH_ASSOC);
        } catch (PDOException $ex) {
            throw $ex;
        }
    }

    public static function getArticle($id)
    {
        $sql = "SELECT * FROM article WHERE id='$id'";
        // $stmt = query($sql);
        try {
            // return $stmt->fetchAll(PDO::FETCH_ASSOC);
            return query(($sql));
        } catch (PDOException $ex) {
            throw $ex;
        }
    }

    public static function updateArticle($id, $titre, $image, $categorie, $contenu)
    {

        $sql = "UPDATE article SET titre = '$titre', image = '$image', categorie = '$categorie', contenu = '$contenu' WHERE id='$id'";

        try {
            query($sql);
        } catch (PDOException $ex) {
            throw $ex;
        }
    }

    public static function deleteArticle($id)
    {
        $sql = "DELETE FROM article WHERE id='$id'";

        try {
            query($sql);
        } catch (PDOException $ex) {
            throw $ex;
        }
    }

}
