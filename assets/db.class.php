<?php
//error_reporting(0);

session_start();

define('DB_SERVER', 'localhost');
define('DB_USERNAME', 'root');
define('DB_PASSWORD', '');
define('DB_DATABASE', 'nasa');

$connectJigo = new mysqli(DB_SERVER, DB_USERNAME, DB_PASSWORD, DB_DATABASE);

class Engine 
{
    private $host       = DB_SERVER;
    private $username   = DB_USERNAME;
    private $password   = DB_PASSWORD;
    private $database   = DB_DATABASE;
    
    protected $Jigo;
    
    public function __construct(){

        if (!isset($this->Jigo)) {
            
            $this->Jigo = new mysqli($this->host, $this->username, $this->password, $this->database);
            
            if ($this->Jigo->connect_error) die('Database error -> ' . $this->Jigo->connect_error);           
        }
        return $this->Jigo;
    }
    public function DDB()
    {
        $k = new mysqli(DB_SERVER, DB_USERNAME, DB_PASSWORD, DB_DATABASE);
        if ($k->connect_error) die('Database error -> ' . $k->connect_error);   
        return $k;
    }
}
?>