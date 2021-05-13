<?php
require_once './lib/autoload.php';
$html =  new Html('pt-br');
$head = new Head();
if ($_SESSION['usuarioLogado']) {
    $menu = new Menu();

    $div = new Div('container');
    
    if (!isset($_GET['pg'])) {
        require_once 'home.php';
    } else {
        require_once 'cadastros/' . $_GET['pg'] . '/index.php';
    }
    
    echo '</div>';
    

} else {
    require_once LAYOUTS . 'login.php';
}

