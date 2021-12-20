<?php

class LocationRepository extends BaseRepository
{
    public function insertLocation($title) 
    {
        $sqlQuery = "
            INSERT INTO `location` (`title`)
            VALUES ('$title')
        ";
        return $this->conn->query($sqlQuery);
    }


    public function getLocationList()
    {
        $sqlQuery = "
            SELECT *
            FROM `location`
        ";

        return $this->fetchMany($sqlQuery);
    }
}
