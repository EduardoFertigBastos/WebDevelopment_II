<?php
require_once './lib/autoload.php';

function dd($a){
    echo '<pre>';
    var_dump($a);
    echo '</pre>';
    die();
}

function createListButton(&$aside, $class, $border) {
    for($x = 0; $x < 9; $x++) {
    
        $button = new Button('Button', [
            'class' => $class
        ]);
    
        if ($x <> 0) {
            $divButton = new Div('row ' . $border);
        } else {
            $divButton = new Div('row');
        }
    
        $divButton->addElementToDiv($button);
        
        $aside->addElementToAside($divButton);
    }    
}

function createListUL($ul, $array) {
    for ($x = 0;  $x < sizeof($array); $x++) {
        $li = new Li($array[$x], 'nav-item');
        $ul->addLi($li);
    }
}

function createTable($table, $thData, $tdData) {
    $trCabecalho = new Tr();

    foreach ($thData as $thValue) {
        $th = new Th($thValue);
        $trCabecalho->addElementToTr($th); 
    }
    
    $tHead = new tHead();
    $tHead->addElementToTHead($trCabecalho);
    
    // Criação da Tabela de Dados
    $tBody = new TBody();
    foreach ($tdData as $row) {
    
        $tr = new Tr();
        
        foreach ($row as $col) {;
            $td = new Td($col);
            $tr->addElementToTr($td);
        }
    
        $tBody->addElementToTBody($tr);
    }
    
    $table->addElementToTable($tHead);
    $table->addElementToTable($tBody);
}

function createPagination($ulPagination, $pgData) {
    foreach($pgData as $element) {
        $a  = new Link('#',$element, 'page-link', '');
        $li = new Li($a, 'page-item');
        $ulPagination->addLi($li);
    }
    
    // Criação do NavPagination
    $navPagination = new Nav('d-flex justify-content-center');
    $navPagination->addElementToNav($ulPagination);
}
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

createListUL($ul, $a);

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

$aside = new Aside('col-2 d-flex flex-column');

createListButton($aside, 'bg-secondary text-light col-12 py-3', 'border-top border-transparent');


/**
 * Table
 */

// Dados
$thData = ['#', 'First', 'Last', 'Handle'];
$tdData = [
    [
        '1', 
        'Mark', 
        'Otto', 
        '@mdo'
    ],
    [
        '2',
        'Jacob',
        'Thornton',
        '@fat'
    ],
    [
        '3',
        'Larry',
        'The bird',
        '@twitter'
    ],
]; 


// Criação do Cabeçalho


// Criação da Tabela em Definitivo
$table = new Table('table table-striped');
createTable($table, $thData, $tdData);

/**
 * Pagination 
 */

// Array de dados pro menu de Pagination.
$pgData = ['Previous', 1, 2, 3, 'Next'];

$ulPagination = new Ul('pagination');

createPagination($ulPagination, $pgData);


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
