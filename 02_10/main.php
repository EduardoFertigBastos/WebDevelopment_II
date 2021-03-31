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

$linkNormalize = new LinkHead([
    'rel'  => 'stylesheet',
    'href' => 'assets/css/normalize.css',
]);

$linkCss = new LinkHead([
    'href'        => 'https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css',
    'rel'         => 'stylesheet',
    'integrity'   => 'sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh',
    'crossorigin' => 'anonymous'
]);

$title = new Title('Menu');

$head->addElementToHead($charset);
$head->addElementToHead($viewport);
$head->addElementToHead($linkNormalize);
$head->addElementToHead($linkCss);
$head->addElementToHead($title);


/**
 * Parte relacionada ao Body
 */

/**
 * NAV MENU MAIN
 */

// Itens do Menu.
$a[0] = new Link('', 'Home', 'nav-link');
$a[1] = new Link('', 'Link', 'nav-link');
$a[2] = new Link('', 'disabled', 'nav-link disabled');

$aNavbar = new Link('#', 'Navbar', 'navbar-brand', '');

// Criação de Listas.
$ul = new Ul('navbar-nav mr-auto');
$ul->createListUL($a);

// Criação de Span.
$span = new Span(null, 'navbar-toogler-icon');

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

$a[4] = new Link('logoff.php', 'Sair', 'btn btn-warning', '');
// Criação da Div Navbar Collapse e adicionando a lista. 
$divNavbarCollapse = new Div('collapse navbar-collapse');
$divNavbarCollapse->addElementToDiv($ul);
$divNavbarCollapse->addElementToDiv($a[4]);

// Criação Nav e adicionando os elementos.
$navMain = new Nav('navbar navbar-expand-lg navbar-dark bg-dark');
$navMain->addElementToNav($aNavbar);
$navMain->addElementToNav($button);
$navMain->addElementToNav($divNavbarCollapse);


/**
 * Criação do Aside
 */

$conn = new Connection();
$itemsMenu = $conn->select(' SELECT acao, texto
                               FROM menu');

$aside = new Aside('col-2 d-flex flex-column');
$aside->createListButton($itemsMenu);


/**
 * Table
 */

// Dados
$thData = ['#', 'Nome', 'E-mail', 'Data de Cadastro'];
$tdData = $conn->select(' SELECT id, nome, email, datacadastro
                            FROM pessoa');


// Criação do Cabeçalho


// Criação da Tabela em Definitivo
$table = new Table('table table-striped');
$table->createTable($thData, $tdData);

/**
 * Pagination 
 */

// Array de dados pro menu de Pagination.
$pgData = ['Previous', 1, 2, 3, 'Next'];

$ulPagination = new Ul('pagination');
$ulPagination->createPagination($pgData);

// Criação do NavPagination
$navPagination = new Nav('d-flex justify-content-center');
$navPagination->addElementToNav($ulPagination);


/**
 * Section Table.
 */

$sectionTable = new Section('col-10 d-flex flex-column');
$sectionTable->addElementToSection($table);
$sectionTable->addElementToSection($navPagination);

$main = new Main('d-flex justify-content-between');
$main->addElementToMain($aside);
$main->addElementToMain($sectionTable);







$script1 = new Script('https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js', [
    'integrity'   => 'sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0',
    'crossorigin' => 'anonymous',
]);

$body->addElementToBody($navMain);
$body->addElementToBody($main);
$body->addElementToBody($script1);


$html->addElementToHtml($head);
$html->addElementToHtml($body);

echo $html;
