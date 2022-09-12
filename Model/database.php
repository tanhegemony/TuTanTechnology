<?php

class Database {

    private static $dsn = 'mysql:host=localhost;dbname=tutantechnology';
    private static $username = 'root';
    private static $password = 'root';
    private static $options = array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION);
    private static $db;

    private function __construct() {
        
    }

    public static function getDB() {
        if (!isset(self::$db)) {
            try {
                self::$db = new PDO(self::$dsn,
                        self::$username,
                        self::$password,
                        self::$options);
            } catch (PDOException $e) {
                $error_message = $e->getMessage();
                echo "<p>Database Error: $error_message </p>";
                exit();
            }
        }
        return self::$db;
    }

}

?>