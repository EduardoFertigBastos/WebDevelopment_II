<?php

class Menu
{
    private $username;
    private $password;
    private $banco;
    private $host;

    public function __construct($username, $password, $banco, $host)
    {
        $this->username = $username;
        $this->password = $password;
        $this->banco  = $banco;
        $this->host  = $host;

        try {
            $conn = new PDO("mysql:host={$this->host};dbname={$this->banco}", $this->username, $this->password);
            $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        } catch(PDOException $e) {
            echo 'Erro: ' . $e->getMessage();
        }
    }


}