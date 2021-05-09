<?php

class Ol
{
    private $lista = array();
    private $class;

    public function __construct($class) 
    {
        $this->class = $class;
    }

    public function addLi($array) 
    {
        $this->lista[] = $array;
    }

    public function __toString()
    {
        $ol = '<ol class="' . $this->class . '">';

        foreach ($this->lista as $valor) {
            $ol .= $valor;
        }
        
        $ol .= "</ol>";

        return $ol;
    }

}