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

// Itens do Menu.
$a[0] = new Link(',', 'Home', 'nav-link');
$a[1] = new Link(',', 'Link', 'nav-link');
$a[2] = new Link(',', 'disabled', 'nav-link disabled');
$aNavbar = new Link('#', 'Navbar', 'navbar-brand', '');

// Criação de Listas.
$li = [];
$ul = new Ul('navbar-nav mr-auto');
for ($x = 0; 3 > sizeof($a); $x++) {
    $li = new Li($a[$x], 'nav-item');
    $ul->addLi($li);
}

// Criação de Span.
$span = new Span('', 'navbar-toogler-icon');

// Criação do Button.
$button = new Button($span, [
    'class' => 'navbar-toggler',
    'type' => 'button',
    'data-toggle' => 'collapse',
    'data-target' => '#navbarSupportedContent',
    'aria-controls' => 'navbarSupportedContent',
    'aria-expanded' => 'false',
    'aria-label' => 'Toggle navigation',
]);

// Criação da Div Navbar Collapse e adicionando a lista. 
$divNavbarCollapse = new Div('collapse navbar-collapse');
$divNavbarCollapse->addElementToDiv($ul);

// Criação Nav e adicionando os elementos.
$navMain = new Nav('navbar navbar-expand-lg navbar-dark bg-dark');
$navMain->addElementToNav($aNavbar);
$navMain->addElementToNav($button);
$navMain->addElementToNav($divNavbarCollapse);


/**
 * Criação do Aside
 */







$script1 = new Script('https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js', [
    'integrity'   => 'sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0',
    'crossorigin' => 'anonymous',
]);

$body->addElementToBody($containerPrincipal);
$body->addElementToBody($script1);


$html->addElementToHtml($head);
$html->addElementToHtml($body);

echo $html;
