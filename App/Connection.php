<?php
namespace App;

use PDOException;

class Connection
{
    public static function getDb()
    {
        $host = "localhost";
        $dbname = "";
        $charset = "utf8";
        $user = "root";
        $pass = "";

        try {
            $conn = new \PDO(
                "mysql:host=$host;dbname=$dbname;charset=$charset",
                $user,
                $pass
            );
            return $conn;
        } catch (PDOException $e) {
            // Rotina de tratamento no caso de erro
        }
    }
}