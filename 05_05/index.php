<?php
require __DIR__ . '/lib/autoload.php';

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
    'href' => 'estilo.css',
]);


$title = new Title('Login');

$head->addElementToHead($charset);
$head->addElementToHead($viewport);
$head->addElementToHead($linkCss);
$head->addElementToHead($title);


    
$form = new Form('POST', 'index.php');

$apagar = new Input('', [
    'type'  => 'submit',
    'value' => 'APAGAR',
    'id'    => 'apagar',
    'name'  => 'apagar',
]);

$c = new Input('', [
    'type'  => 'submit',
    'value' => 'C',
    'id'    => 'C',
    'name'  => 'C',
]);

$ponto = new Input('', [
    'type'  => 'submit',
    'value' => '.',
    'id'    => 'button',
    'name'  => 'button',
]);

$sete = new Input('', [
    'type'  => 'submit',
    'value' => '7',
    'name'  => 'button',
]);

$oito = new Input('', [
    'type'  => 'submit',
    'value' => '8',
    'name'  => 'button',
]);

$nove = new Input('', [
    'type'  => 'submit' ,
    'value' => '9',
    'name'  => 'button',
]);

$mais = new Input('', [
    'type'  => 'submit',
    'value' => '+',
    'name'  => 'button',
]);

$menos = new Input('', [
    'type'  => 'submit',
    'value' => '-',
    'name'  => 'button',
]);

$quatro = new Input('', [
    'type'  => 'submit',
    'value' => '4',
    'name'  => 'button',
]);

$cinco = new Input('', [
    'type'  => 'submit',
    'value' => '5',
    'name'  => 'button',
]);

$seis = new Input('', [
    'type'  => 'submit',
    'value' => '6',
    'name'  => 'button',
]);

$multiplicar = new Input('', [
    'type'  => 'submit',
    'value' => '*',
    'name'  => 'button',
]);

$divisao = new Input('', [
    'type'  => 'submit',
    'value' => '/',
    'name'  => 'button',
]);

$zero = new Input('', [
    'type'  => 'submit',
    'value' => '0',
    'name'  => 'button',
]);

$um = new Input('', [
    'type'  => 'submit',
    'value' => '1',
    'name'  => 'button',
]);

$dois = new Input('', [
    'type'  => 'submit',
    'value' => '2',
    'name'  => 'button',
]);

$tres = new Input('', [
    'type'  => 'submit',
    'value' => '3',
    'name'  => 'button',
]);

$igual = new Input('', [
    'type'  => 'submit',
    'value' => '=',
    'name'  => 'button',
]);

session_start();
error_reporting(0);
ini_set('display_errors', 0);

// Concatena os caracteres pressionados.
$_SESSION['calculadora'] = $_SESSION['calculadora'] . $_POST['button'];    

$result = new Input('', [
    'type'  => 'text',
    'value' => $_SESSION['calculadora'],
    'id'    => 'result',
]);

$vista = new Input('', [
    'type'  => 'text',
    'value' => $_SESSION['resultado'],
    'id'    => 'vista',
]);

$calculadora = new Calculadora();

if (isset($_SESSION['calculadora'])) {

    $calculadora->verificarApagar($_SESSION['calculadora']);
    $calculadora->verificarApagarUm($_SESSION['calculadora']);
    $calculadora->calcularResultado($_SESSION['calculadora']);
}

$form->addElementToForms($apagar);
$form->addElementToForms($c);
$form->addElementToForms($ponto);
$form->addElementToForms('<br />');
$form->addElementToForms($sete);
$form->addElementToForms($oito);
$form->addElementToForms($nove);
$form->addElementToForms($mais);
$form->addElementToForms($menos);
$form->addElementToForms('<br />');
$form->addElementToForms($quatro);
$form->addElementToForms($cinco);
$form->addElementToForms($seis);
$form->addElementToForms($multiplicar);
$form->addElementToForms($divisao);
$form->addElementToForms('<br />');
$form->addElementToForms($zero);
$form->addElementToForms($um);
$form->addElementToForms($dois);
$form->addElementToForms($tres);
$form->addElementToForms($igual);

$body->addElementToBody($result);
$body->addElementToBody($vista);
$body->addElementToBody($form);

$html->addElementToHtml($head);
$html->addElementToHtml($body);

echo $html;
?>
