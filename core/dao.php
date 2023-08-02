<?php

require_once './includes/config.php';

// function query($sql)
// {

// Database connection paramettres
// $servername = 'localhost';
// $username = 'root';
// $password = '$Mike1q2w3e4R';
// $db_name = 'tp2_blog_db';

//try {
//$conn = new PDO("mysql:host=$servername;dbname=$db_name", $username, $password);
// $conn->setAttribute(PDO::ATTR_EMULATE_PREPARES, false);
// $conn->setAttribute(PDO::MYSQL_ATTR_USE_BUFFERED_QUERY, true);
// $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

// echo "Connected successfully";
// $stmt = $conn->prepare($sql);
// $stmt->execute();

// return $stmt;

// } catch (PDOException $ex) {
//     throw $ex;
// }
// }

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

        // try {
        //     query($sql);
        // } catch (PDOException $ex) {
        //     throw $ex;
        // }
    }

    public static function getArticles()
    {
        global $conn;

        $sql = "SELECT * FROM " . self::$tables[0];

        $stmt = $conn->prepare($sql);
        $stmt->execute();
        return $stmt;

        //$stmt = query($sql);
        // try {
        //     return query(($sql));
        //     //return $stmt->fetchAll(PDO::FETCH_ASSOC);
        // } catch (PDOException $ex) {
        //     throw $ex;
        // }
    }

    public static function getArticle($id)
    {
        global $conn;

        $sql = "SELECT * FROM " . self::$tables[0] . " WHERE id='$id'";

        $stmt = $conn->prepare($sql);
        $stmt->execute();
        return $stmt;

        // $stmt = query($sql);
        // try {
        //     // return $stmt->fetchAll(PDO::FETCH_ASSOC);
        //     return query(($sql));
        // } catch (PDOException $ex) {
        //     throw $ex;
        // }
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

        // try {
        //     query($sql);
        // } catch (PDOException $ex) {
        //     throw $ex;
        // }
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

        // try {
        //     query($sql);
        // } catch (PDOException $ex) {
        //     throw $ex;
        // }
    }

}
