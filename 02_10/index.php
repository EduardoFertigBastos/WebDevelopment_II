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

$title = new Title('Login');

$head->addElementToHead($charset);
$head->addElementToHead($viewport);
$head->addElementToHead($linkCss);
$head->addElementToHead($title);


/**
 * Parte relacionada ao Body
 */

/**
 * Form-Row Email
 */

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


/**
 * Form-Row Senha
 */

$div_formRow_password   = new Div('form-row mx-3 my-2');
$div_formGroup_password   = new Div('form-group');
$label_senha = new Label('Password', 'inputSenha');
$input_senha = new Input('form-control', [
    'id'   => 'inputSenha',
    'name' => 'inputSenha',
    'type' => 'password', 
    'placeholder' => 'Password' 
]);

$div_formGroup_password->addElementToDiv($label_senha);
$div_formGroup_password->addElementToDiv($input_senha);
$div_formRow_password->addElementToDiv($div_formGroup_password);


/**
 * Form-Row Checkbox
 */

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


/**
 * Form-Row Sign In 
 */

$div_formRow_signin   = new Div('form-row mx-3 my-2');
$div_formGroup_signin = new Div('form-group');
$a_signin     = new Link('aa', 'Sign In', 'btn btn-primary');

$div_formGroup_signin->addElementToDiv($a_signin);
$div_formRow_signin->addElementToDiv($div_formGroup_signin);


/**
 * Forms
 */

$form    = new Form('', '');

$form->addElementToForms($div_formRow_email);
$form->addElementToForms($div_formRow_password);
$form->addElementToForms($div_formRow_checkbox);
$form->addElementToForms($div_formRow_signin);


/**
 * Card-Footer 
 */

$cardFooter          = new Div('card-footer bg-transparent');

$div_cardFooter_row1 = new Div('row mx-3 my-2');
$div_cardFooter_row1->addElementToDiv('New around here? Sign Up');

$div_cardFooter_row2 = new Div('row mx-3 my-2');
$div_cardFooter_row2->addElementToDiv('Forgot Password?');

$cardFooter->addElementToDiv($div_cardFooter_row1);

$cardFooter->addElementToDiv($div_cardFooter_row2);


/**
 * Article 
 */
 
$article = new Article('card-body');
$article->addElementToArticle($form);


/**
 * divCard
 */

$divCard = new Div('card mt-5');
$divCard->addElementToDiv($article);
$divCard->addElementToDiv($cardFooter);


/**
 * divFlex 
 */

$divFlex = new Div('d-flex justify-content-center align-items-center');
$divFlex->addElementToDiv($divCard);


/**
 * Container Principal  
 */
$containerPrincipal = new Div('container');
$containerPrincipal->addElementToDiv($divFlex);










$script1 = new Script('https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js', [
    'integrity'   => 'sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0',
    'crossorigin' => 'anonymous',
]);

$body->addElementToBody($containerPrincipal);
$body->addElementToBody($script1);


$html->addElementToHtml($head);
$html->addElementToHtml($body);

echo $html;
