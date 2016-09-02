<?php
class Db {
    public $connection = null;

    public function __construct()
    {
        $this->databaseConnection();
    }

    public function databaseConnection()
    {
        try {
            $this->connection = new PDO("mysql:host=localhost;dbname=kranten", "root", "mysql");
        } catch (PDOException $e) {
            $this->connection = print "Error!: " . $e->getMessage() . "<br/>";
            die();
        }
    }
}