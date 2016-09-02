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

        return $this->locations;
    }

    public function importLocations($locations)
    {
        $locations =  preg_split('/\n|\r/', $locations, -1, PREG_SPLIT_NO_EMPTY);
        $query = $this->connection->prepare('INSERT INTO locations (title, lat, lng, color) VALUES (:title, :lat, :lng, :color)');
        foreach ($locations as $location) {
            $location = explode(',', $location);
            $title = $location[0];
            $lat = $location[1];
            $lng = $location[2];
            $color = ($location[3]) ? $location[3] : 'FFFFFF';
            $query->execute(array(':title'=>$title, ':lat'=>$lat, ':lng'=>$lng, ':color'=>$color));
        }
    }
}