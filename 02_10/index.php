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

$containerPrincipal = new Div('container');
$container_2 = new Div('col-3');

$divCard     = new Div('card mt-5');
$article = new Article('card-body');
$form    = new Form('', '', '');


$div_formRow_email   = new Div('form-row mx-3 my-2');
$div_formGroup_email = new Div('form-group');
$label_email = new Label('Input Label', 'inputEmail');
$input_email = new Input('form-control', [
    'id'   => 'inputEmail',
    'name' => 'inputEmail',
    'type' => 'email',
    'placeholder' => 'name@example.com',
]);

$div_formGroup_email->addElementToDiv($label_email);
$div_formGroup_email->addElementToDiv($input_email);
$div_formRow_email->addElementToDiv($div_formGroup_email);



$div_formRow_password   = new Div('form-row mx-3 my-2');
$div_formGroup_password   = new Div('form-group');
$label_senha = new Label('Password', 'inputSenha');
$input_senha = new Input('form-control', [
    'id'   => 'inputSenha',
    'name' => 'inputSenha',
    'type' => 'password', 
    'placeholder' => 'Password' 
]);



$div_formRow_checkbox   = new Div('form-row mx-3 mt-3');
$div_formGroup_checkbox   = new Div('form-group');
$label_checkbox = new Label('Salvar Senha', 'check1', 'px-2');
$input_checkbox = new Input('form-check-input', [
    'id'   => 'check1',
    'name' => 'check1',
    'type' => 'checkbox'
]);

$div_formGroup_checkbox->addElementToDiv($input_checkbox);
$div_formGroup_checkbox->addElementToDiv($label_checkbox);
$div_formRow_checkbox->addElementToDiv($div_formGroup_checkbox);



$div_formGroup_password->addElementToDiv($label_senha);
$div_formGroup_password->addElementToDiv($input_senha);
$div_formRow_password->addElementToDiv($div_formGroup_password);

$div_formRow_signin   = new Div('form-row mx-3 my-2');
$div_formGroup_signin = new Div('form-group');
$a_signin     = new Link('aa', 'Sign In', 'btn btn-primary');

$div_formGroup_signin->addElementToDiv($a_signin);
$div_formRow_signin->addElementToDiv($div_formGroup_signin);


$form->addElementToForms($div_formRow_email);
$form->addElementToForms($div_formRow_password);
$form->addElementToForms($div_formRow_checkbox);
$form->addElementToForms($div_formRow_signin);

$cardFooter = new Div('card-footer');
$p1 = new P('New around here? Sign Up');
$p2 = new P('Forgot Password?');

$cardFooter->addElementToDiv($p1);
$cardFooter->addElementToDiv($p2);

$article->addElementToArticle($form);

$divCard->addElementToDiv($article);
$divCard->addElementToDiv($cardFooter);
$container_2->addElementToDiv($divCard);
$containerPrincipal->addElementToDiv($container_2);










$script1 = new Script('https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js', [
    'integrity'   => 'sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0',
    'crossorigin' => 'anonymous',
]);

$body->addElementToBody($containerPrincipal);
$body->addElementToBody($script1);


$html->addElementToHtml($head);
$html->addElementToHtml($body);

echo $html;
