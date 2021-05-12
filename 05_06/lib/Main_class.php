<?php

class Main
{
    private $lista = array();
    private $class;

    public function __construct($class = '')
    {
        $this->class = $class;
    }

    public function addElementToMain($array) 
    {
        $this->lista[] = $array;
    }

    public function __toString()
    {
        $main = '<main class="'.$this->class.'">';

        foreach ($this->lista as $valor) {
            $main .= $valor;
        }
        
        $main .= "</main>";

        return $main;
    }

}