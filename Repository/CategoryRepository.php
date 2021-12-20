<?php

class CategoryRepository extends BaseRepository
{
    public function getCategoryList()
    {
        $sqlQuery = "
            SELECT *
            FROM `category`
            ORDER BY `title` ASC
        ";

        return $this->fetchMany($sqlQuery);
    }
}
