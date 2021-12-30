<?php
namespace App\Model;

class Conexao {

    private static $instance;

    public static function getConn() {

        if(!isset(self::$instance)):
            self::$instance = new \PDO('mysql:host=localhost;port=3308;dbname=pdo;','root','');
        endif;
        return self::$instance;
    }
}
?>