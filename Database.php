<?php
class Database
{
    public $hostname = "localhost";
    public $username = "root";
    public $password = "";
    public $dbname;
    public $conn;

    function __construct($dbname)
    {
        $this->dbname = $dbname;
        $this->connect();
    }

    function connect()
    {
        $this->conn = new mysqli($this->hostname, $this->username, $this->password, $this->dbname);
    }
}
