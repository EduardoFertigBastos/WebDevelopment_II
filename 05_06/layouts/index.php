<?php
require_once './lib/autoload.php';
$html =  new Html('pt-br');
$head = new Head();

$html->addElementToHtml($head);
if ($_SESSION['usuarioLogado']) {
    $menu = new Menu();

    $div = new Div();
    
    if (!isset($_GET['pg'])) {
        $home = new Home();
        $div->addElementToDiv($home);
    } else {
        $html->addElementToHtml(require_once 'cadastros/' . $_GET['pg'] . '/index.php');
    }
    
    
    $html->addElementToHtml($menu);
    $html->addElementToHtml($div);    


} else {
    $html->addElementToHtml(require_once LAYOUTS . 'login.php');
    
}

echo $html;