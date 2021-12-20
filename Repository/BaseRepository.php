<?php

class BaseRepository
{
    protected $conn;

    public function __construct()
    {
        $dsn = 'mysql:host='._DB_HOST_.':'._DB_PORT_.';dbname=' . _DB_NAME_;
        $this->conn = new PDO($dsn, _DB_USER_, _DB_PASS_);
        $this->conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    }

    public function fetchMany($sqlQuery)
    {
        $stmt = $this->conn->prepare($sqlQuery);
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }
}

