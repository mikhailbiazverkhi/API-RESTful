<?php

require_once './includes/config.php';

class Database
{
    static $tables = ['article'];

    public static function addArticle($titre, $image, $categorie, $contenu)
    {
        global $conn;

        $sql = "INSERT INTO " . self::$tables[0] . " VALUES (Default, '$titre', '$image', '$categorie', '$contenu')";

        $stmt = $conn->prepare($sql);
        $stmt->execute();
        return $stmt;
    }

    public static function getArticles()
    {
        global $conn;

        $sql = "SELECT * FROM " . self::$tables[0];

        $stmt = $conn->prepare($sql);
        $stmt->execute();
        return $stmt;
    }

    public static function getArticle($id)
    {
        global $conn;

        $sql = "SELECT * FROM " . self::$tables[0] . " WHERE id='$id'";

        $stmt = $conn->prepare($sql);
        $stmt->execute();
        return $stmt;
    }

    public static function updateArticle($id, $titre, $image, $categorie, $contenu)
    {
        global $conn;

        $sql = "UPDATE " . self::$tables[0] . " SET titre = :titre, image = :image, categorie = :categorie, contenu = :contenu WHERE id= :id";

        $stmt = $conn->prepare($sql);

        $stmt->bindParam(':id', $id);
        $stmt->bindParam(':titre', $titre);
        $stmt->bindParam(':image', $image);
        $stmt->bindParam(':categorie', $categorie);
        $stmt->bindParam(':contenu', $contenu);

        if ($stmt->execute()) {
            return true;
        }
        return false;
    }

    public static function deleteArticle($id)
    {
        global $conn;

        $sql = "DELETE FROM " . self::$tables[0] . " WHERE id= :id";

        $stmt = $conn->prepare($sql);
        $stmt->bindParam(':id', $id);

        if ($stmt->execute()) {
            return true;
        }
        return false;
    }
}
