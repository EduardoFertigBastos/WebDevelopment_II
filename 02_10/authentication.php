<?php 
require_once 'Database/Authenticacion_class.php';
require 'autoloads.php';

$conn = new Connection();
function dd($a) {
    echo '<pre>';
    var_dump($a);
    echo '</pre>';
    die();
}
$authentication = new Authenticacion();

$email = $_POST['inputEmail'];
$password = $_POST['inputSenha'];

if ($authentication->authenticate($conn->getConn(), $email, $password)) {
    return require_once 'main.php';
} else {
    return require_once 'index.php';
}