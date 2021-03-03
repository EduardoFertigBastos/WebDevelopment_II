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
    'href'        => 'https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css',
    'rel'         => 'stylesheet',
    'integrity'   => 'sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl',
    'crossorigin' => 'anonymous'
]);

$title = new Title('Hello, world!');

$head->addElementToHead($charset);
$head->addElementToHead($viewport);
$head->addElementToHead($linkCss);
$head->addElementToHead($title);


/**
 * Parte relacionada ao Body
 */

$div_1     = new Div('card');
$article_1 = new Article('card-body');
$a_1       = new link('', 'Sign Up', 'float-right btn btn-outline-primary');
$h4_1      = new H4('Sign In', 'card-title mb-4 mt-1');
$form_1    = new Form('', '', '');


$div_2   = new Div('form-group');
$label_1 = new Label('Seu e-mail', 'inputEmail', 'inputEmail');
$input_1 = new Input('email', 'inputEmail', 'inputEmail', 'form-control');

$div_2->addElementToDiv($label_1);
$div_2->addElementToDiv($input_1);



$div_3   = new Div('form-group');
$a_2     = new Link('', 'Esqueceu o seu email?', 'float-right');
$label_2 = new Label('Sua senha', 'inputSenha', 'inputSenha');
$input_2 = new Input('password', 'inputSenha', 'inputSenha', 'form-control');

$div_3->addElementToDiv($a_2);
$div_3->addElementToDiv($label_2);
$div_3->addElementToDiv($input_2);


$div_4 = new Div('form-group');
$div_5 = new Div('checkbox');
$label_3 = new Label('Salvar Senha', 'check1', 'check1');
$input_3 = new Input('checkbox', 'check1', 'check1');

$div_5->addElementToDiv($label_3);
$div_5->addElementToDiv($input_3);

$div_4->addElementToDiv($div_5);















$script1 = new Script('https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js', [
    'integrity'   => 'sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0',
    'crossorigin' => 'anonymous',
]);

?>
    
    <?php
    $body->addElementToBody($titulo1);
    $body->addElementToBody($script1);


    $html->addElementToHtml($head);
    $html->addElementToHtml($body);

    echo $html;
