<?php
session_start();
//error_reporting(E_ALL); 
ini_set('display_errors', 'Off'); 
if (isset($_GET['sair'])) {
    
    if ($_GET['sair']) {
        session_destroy();
        session_start();
        header("Location : /");
    }
    
}

require_once __DIR__ . "/bibliotecas/parametros.php";
require_once AUTOLOAD;
$authentication = new Authenticacion();
$connection = new Connection();

$authentication->authenticate($connection->conn);
require_once LAYOUTS . "index.php";