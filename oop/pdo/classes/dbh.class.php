<?php

class Dbh
{
    private $host = "localhost";
    private $user = "root";
    private $pwd = "";
    private $dbName = "oopphp16";

    protected function connect()
    {
        //dsn=data source name
        $dsn = 'mysql:host=' . $this->host . ';dbName=' . $this->dbName;

        //create pdo connection
        $pdo = new PDO($dsn, $this->user, $this->pwd);
        $pdo->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
        return $pdo;
    }
}