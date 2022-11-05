<?php

namespace Model;

use PDO, PDOException;

abstract class Model
{
    private static $pdo;

    private static function setBdd()
    {
        try {
            self::$pdo = new PDO('mysql:host=localhost;dbname=partie_deux_blog;charset=utf8', 'root', '', array(
                PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
                PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8'
            ));
        } catch (PDOException $e) {
            //$e->getMessage();
            die('Problème de connexion à la base de données.');
        }
    }
    protected static function getBdd()
    {
        if (self::$pdo === null) {
            self::setBdd();
        }
        return self::$pdo;
    }
}
