<?php
class playground extends Db {
    public $locations = array();

    public function __construct()
    {
        parent::__construct();
        $this->getLocations();
    }

    private function getLocations()
    {
        $query = $this->connection->query('SELECT * FROM adress');
        $result = $query->fetchAll(\PDO::FETCH_ASSOC);
        $this->locations = $result;
    }
}