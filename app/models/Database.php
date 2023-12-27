<?php

require(__DIR__ . "/../config/config.php");

class Database
{

    protected $db;

    public function connect()
    {

        try {
            $db = new PDO("mysql:host=" . HOST . ";dbname=" . DB, USER, PASSWORD);
            $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION); // Set PDO to throw exceptions on error
            return $db;

        } catch (PDOException $e) {
            throw new Exception("Database connection error: " . $e->getMessage());
        }

    }
}

?>