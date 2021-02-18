<?php 
spl_autoload_register(function($class) {
    $arquivo = $_SERVER["DOCUMENT_ROOT"]."/lib/".$class."_class.php";
    if (file_exists($arquivo)) {
        require_once $arquivo;
    }
});