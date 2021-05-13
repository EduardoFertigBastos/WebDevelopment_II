<?php


class Produto {

    public $id;
    public $nome;
    public $valor;
    public $quantidadeEstoque;

    public function __construct($id, $nome, $valor, $quantidadeEstoque){
        $this->id = $id;
        $this->nome = $nome;
        $this->valor = $valor;
        $this->quantidadeEstoque = $quantidadeEstoque;
    }

    public function getTextContent($separator = "|") {
        $text = $this->id . $separator;
        $text .= $this->nome . $separator;
        $text .= $this->valor . $separator;
        $text .= $this->quantidadeEstoque . $separator; 

        return $text;
    }
}