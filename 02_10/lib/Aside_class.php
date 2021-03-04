<?php

class Aside 
{
    private $lista = array();
    private $class;

    public function __construct($class = '') 
    {
        $this->class = $class;
    }

    public function addElementToAside($array) 
    {
        $this->lista[] = $array;
    }

    public function __toString()
    {
        $aside = '<aside class="'.$this->class.'">';

        foreach ($this->lista as $valor) {
            $aside .= $valor;
        }
        
        $aside .= "</aside>";

        return $aside;
    }

}