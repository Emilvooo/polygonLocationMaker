<?php
class Playground extends Db {
    public $locations = array();

    public function __construct()
    {
        parent::__construct();
        $this->getLocations();
    }

    private function getLocations()
    {
        $query = $this->connection->query('SELECT * FROM locations');
        $this->locations = $query->fetchAll(\PDO::FETCH_ASSOC);
    }
}