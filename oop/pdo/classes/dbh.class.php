<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
// error_reporting(E_ALL);
class Dbh
{
    private $host = "localhost:3307";
    private $user = "root";
    private $pwd = "";
    private $dbName = "user_uat";


    protected function connect()
    {
        //dsn=data source name
        //$dsn = 'mysql:host=' . $this->host . ';dbName=' . $this->dbName;

        //create pdo connection
        //$pdo = new PDO($dsn, $this->user, $this->pwd);

        try{
            $pdo = new PDO('mysql:host='.$this->host.';dbName='.$this->dbName, $this->user, $this->pwd);
            // $pdo->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
            $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO:: ERRMODE_EXCEPTION);
            $pdo->exec("set names utf8");
            
        }catch(PDOException $exception){
            echo "Connection error: " . $exception->getMessage();
        }

        return $pdo;
        // var_dump($pdo);
    }
}

