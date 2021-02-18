<?php

class Article {
    private $lista = array();
    private $class;

    public function __construct($class = '') 
    {
        $this->class = $class;
    }

    public function addElementToArticle($array) 
    {
        $this->lista[] = $array;
    }

    public function __toString()
    {
        $article = '<article class="'.$this->class.'">';

        foreach ($this->lista as $valor) {
            $article .= $valor;
        }
        
        $article .= "</article>";

        return $article;
    }

}