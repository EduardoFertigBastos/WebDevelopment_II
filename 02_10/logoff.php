<?php 
require_once 'Database/Authenticacion_class.php';
require 'autoloads.php';

$_SESSION['login'] = false;
return require_once 'index.php';
