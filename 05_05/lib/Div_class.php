<?php

class Div
{
    private $lista = array();
    private $class;

    public function __construct($class = '')
    {
        $this->class = $class;
    }

    public function addElementToDiv($array) 
    {
        $this->lista[] = $array;
    }

    public function __toString()
    {
        $div = '<div class="'.$this->class.'">';

        foreach ($this->lista as $valor) {
            $div .= $valor;
        }
        
        $div .= "</div>";

        return $div;
    }

}