<?php

class AdvertisementRepository extends BaseRepository
{
    public function createAdvertisement($title, $categoryId, $locationId, $price, $description, $thumbnail)
    {
        $sqlQuery = "
            INSERT INTO `advertisement` (`id`, `category_id`, `location_id`, `title`, `price`, `description`, `thumbnail`)
            VALUES (NULL, '$categoryId', '$locationId', '$title', '$price', '$description', '$thumbnail');
        ";
        return $this->conn->query($sqlQuery);
    }

    public function getAdvertisementList($categoryId, $locationId, $search, $priceFrom, $priceTo)
    {
        $where = [];
        if ($categoryId) {
            $where[] = "`advertisement`.category_id = '$categoryId'";
        }

        if ($locationId) {
            $where[] = "`advertisement`.location_id = '$locationId'";
        }

        if ($search) {
            $where[] = "`advertisement`.title LIKE '%$search%'";
        }


        if ($priceFrom) {
            $where[] = "`advertisement`.price >= '$priceFrom'";
        }

        if ($priceTo) {
            $where[] = "`advertisement`.price <= '$priceTo'";
        }

        if (count($where) > 0) {
            $where = implode(" AND ", $where);
        } else {
            $where = '1';
        }

        $sqlQuery = "
            SELECT `advertisement`.*, `category`.title AS `category_title`, `location`.title AS `location_title`
            FROM `advertisement`
            LEFT JOIN `category` ON `advertisement`.category_id = `category`.id
            LEFT JOIN `location` ON `advertisement`.location_id = `location`.id
            WHERE $where
        ";
        return $this->fetchMany($sqlQuery);
    }
}