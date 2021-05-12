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
    if ($_GET['alterar'])
        return require_once 'edit.php';
    if ($_GET['deletar'])
        return require_once 'delete.php';
    if ($_GET['create'])
        return require_once 'create.php';

    return require_once 'main.php';
} else {
    return require_once 'index.php';
}