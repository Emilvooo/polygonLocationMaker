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
            $this->connection = new PDO("mysql:host=localhost;dbname=playground", "", "");
        } catch (PDOException $e) {
            $this->connection = print "Error!: " . $e->getMessage() . "<br/>";
            die();
        }
    }
}
