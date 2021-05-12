<?php

class Section
{
    private $lista = array();
    private $attributes;

    public function __construct($attributes = []) 
    {
        $this->attributes = $attributes;
    }

    public function addElementToSection($array) 
    {
        $this->lista[] = $array;
    }

    public function __toString()
    {
        
        $section = '<section ';

        foreach ($this->attributes as $attribute => $val) {
            $section .= $attribute . '="' . $val . '" ';
        }
        
        $section .= ">";
 
        foreach ($this->lista as $valor) {
            $section .= $valor;
        }
        
        $section .= "</section>";


        return $section;
    }

}