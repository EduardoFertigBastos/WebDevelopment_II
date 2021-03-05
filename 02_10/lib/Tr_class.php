<?php

class Tr 
{
    private $lista = array();
    private $class;

    public function __construct($class = '') 
    {
        $this->class   = $class;
    }

    public function addElementToTr($array) 
    {
        $this->lista[] = $array;
    }

    public function __toString()
    {
        $tr = '<tr class="'.$this->class.'" >';

        foreach ($this->lista as $valor) {
            $tr .= $valor;
        }
        
        $tr .= "</tr>";

        return $tr;
    }

}