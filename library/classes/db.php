<?php
class Db {
    public $connection = null;

    public function __construct()
    {
        $this->databaseConnection();
    }

    public function databaseConnection()
    {
        $credentials = (parse_ini_file("library/db.ini"));
        try {
            $this->connection = new PDO("mysql:host=localhost;dbname=playground", $credentials['username'], $credentials['password']);
        } catch (PDOException $e) {
            $this->connection = print "Error!: " . $e->getMessage() . "<br/>";
            die();
        }
    }
}
