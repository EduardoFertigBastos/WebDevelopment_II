<?php

class Nav
{
    private $lista = array();
    private $class;

    public function __construct($class = '')
    {
        $this->class = $class;
    }

    public function addElementToNav($array) 
    {
        $this->lista[] = $array;
    }

    public function __toString()
    {
        $nav = '<nav class="'.$this->class.'">';

        foreach ($this->lista as $valor) {
            $nav .= $valor;
        }
        
        $nav .= "</nav>";

        return $nav;
    }

}