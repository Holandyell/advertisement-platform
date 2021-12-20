<?php

class MarkRepository extends BaseRepository 
{
    public function insertMark($title) 
    {
        $sqlQuery = "
            INSERT INTO `mark` (`title`)
            VALUES ('$title')
        ";
        return $this->conn->query($sqlQuery);
    }


    public function getMarkList($markId)
    {
        $where = [];
        if ($markId) {
            $where[]  = "`mark`.title LIKE '%$markId%'";
            
        }

        $sqlQuery = "
            SELECT *
            FROM `mark`
        ";

        return $this->fetchMany($sqlQuery);
    }
}