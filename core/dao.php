<?php

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

    public static function updateArticleTitle($id, $titre)
    {
        global $conn;

        $sql = "UPDATE " . self::$tables[0] . " SET titre = :titre WHERE id= :id";

        $stmt = $conn->prepare($sql);

        $stmt->bindParam(':id', $id);
        $stmt->bindParam(':titre', $titre);

        if ($stmt->execute()) {
            return true;
        }
        return false;
    }

    public static function updateArticleImage($id, $image)
    {
        global $conn;

        $sql = "UPDATE " . self::$tables[0] . " SET image = :image WHERE id= :id";

        $stmt = $conn->prepare($sql);

        $stmt->bindParam(':id', $id);
        $stmt->bindParam(':image', $image);

        if ($stmt->execute()) {
            return true;
        }
        return false;
    }

    public static function updateArticleCategorie($id, $categorie)
    {
        global $conn;

        $sql = "UPDATE " . self::$tables[0] . " SET categorie = :categorie WHERE id= :id";

        $stmt = $conn->prepare($sql);

        $stmt->bindParam(':id', $id);
        $stmt->bindParam(':categorie', $categorie);

        if ($stmt->execute()) {
            return true;
        }
        return false;
    }

    public static function updateArticleContenu($id, $contenu)
    {
        global $conn;

        $sql = "UPDATE " . self::$tables[0] . " SET contenu = :contenu WHERE id= :id";

        $stmt = $conn->prepare($sql);

        $stmt->bindParam(':id', $id);
        $stmt->bindParam(':contenu', $contenu);

        if ($stmt->execute()) {
            return true;
        }
        return false;
    }

}
