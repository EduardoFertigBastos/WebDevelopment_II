<?php

class Connection
{
    private $username;
    private $password;
    private $banco;    
    private $host;     
    private $conn;

    public function __construct()
    {
        $this->username = 'root';
        $this->password = '';
        $this->banco    = 'deswebii';
        $this->host     = 'localhost';

        try {
            $conn = new PDO("mysql:host={$this->host};dbname={$this->banco}", $this->username, $this->password);
            $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

            return $this->conn = $conn;
        } catch(PDOException $e) {
            echo 'Erro: ' . $e->getMessage();
        }
    }
    
    public function getConn() {
        return $this->conn;
    }

    public function select($sSql) {
        try {    
            $stmt = $this->conn->prepare($sSql);
    
            $stmt->execute();
    
            return $stmt->fetchAll(PDO::FETCH_NUM);    
            
        } catch(PDOException $e) {
            $e->getMessage();
        }
    }


}