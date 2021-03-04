<?php
require_once './lib/autoload.php';


/**
 * Criação do HTML
 */

$html = new Html('pt-br');
$head = new Head();
$body = new Body();


/**
 * Parte relacionada ao Head
 */

$charset = new Meta([
    'charset' => 'utf-8'
]);

$viewport = new Meta([
    'name' => 'viewport',
    'content' => 'width=device-width, initial-scale=1'
]);

$linkCss = new LinkHead([
    'rel'  => 'stylesheet',
    'href' => 'assets/css/normalize.css',
]);

$linkCss = new LinkHead([
    'href'        => 'https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css',
    'rel'         => 'stylesheet',
    'integrity'   => 'sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl',
    'crossorigin' => 'anonymous'
]);

$title = new Title('Menu');

$head->addElementToHead($charset);
$head->addElementToHead($viewport);
$head->addElementToHead($linkCss);
$head->addElementToHead($title);


/**
 * Parte relacionada ao Body
 */

/**
 * NAV MENU MAIN
 */

$a[0] = new Link(',', 'Home', 'nav-link');
$a[1] = new Link(',', 'Link', 'nav-link');
$a[2] = new Link(',', 'disabled', 'nav-link disabled');

$li = [];
$ul = new Ul('navbar-nav mr-auto');
for ($x = 0; 3 > sizeof($a); $x++) {
    $li = new Li($a[$x], 'nav-item');
    $ul->addLi($li);
}

$divNavbarCollapse = new Div('collapse navbar-collapse');
$divNavbarCollapse->addElementToDiv($ul);


$script1 = new Script('https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js', [
    'integrity'   => 'sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0',
    'crossorigin' => 'anonymous',
]);

$body->addElementToBody($containerPrincipal);
$body->addElementToBody($script1);


$html->addElementToHtml($head);
$html->addElementToHtml($body);

echo $html;
