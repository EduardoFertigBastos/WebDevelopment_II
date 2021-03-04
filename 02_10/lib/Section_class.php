<?php

class Section
{
    private $lista = array();
    private $class;

    public function __construct($class = '')
    {
        $this->class = $class;
    }

    public function addElementToSection($array) 
    {
        $this->lista[] = $array;
    }

    public function __toString()
    {
        $section = '<section class="'.$this->class.'">';

        foreach ($this->lista as $valor) {
            $section .= $valor;
        }
        
        $section .= "</section>";

        return $section;
    }

}