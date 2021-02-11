<?php

class Ul{
    private $lista = array();
    private $class;

    public function __construct($class) {
        $this->class = $class;
    }

    public function addLi($array) 
    {
        $this->lista[] = $array;
    }

    public function __toString()
    {
        $ul = '<ul>';

        foreach ($this->lista as $valor) {
            $ul .= $valor;
        }
        
        $ul .= "</ul>";

        return $ul;
    }

}