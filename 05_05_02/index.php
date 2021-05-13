<?php
require('autoload.php');

$head = new MontaHead();

$body = new Body();
$body->addProp(new Script("https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js", "sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0", "anonymous", ""));


$fileContent = new FileController("./arquivo.txt");

if(isset($_GET["action"])){
    if($_GET["action"] == "inserir"){
        if(isset($_POST["nome"]) && isset($_POST["valor"]) && isset($_POST["qntd-estoque"])){
            
            $produto = new Produto((explode("|", $fileContent->getLastLine())[0] + 1), $_POST["nome"], $_POST["valor"], $_POST["qntd-estoque"]);
            $fileContent->appendContent("\n" . $produto->getTextContent("|"));
            header("Location: http://" . $_SERVER['HTTP_HOST'] . rtrim(dirname($_SERVER['PHP_SELF']), '/\\'));
        } else {
            $body->addProp(new FormCadastroProduto("Novo Produto"));
        }
    } else {
        $body->addProp("<h1 class='bg-danger'> Ação Solicitada Não reconhecida </h1>");
    }
} else {

    $produtos = array();
    foreach ($fileContent->getContent() as $value){
        $var = explode("|", $value);
        $produtos[] = new Produto($var[0], $var[1], $var[2], $var[3]);
    }

    $body->addProp(new MontaCrud("Produtos", $produtos));
}

echo (new Html("pt-br", $head, $body));