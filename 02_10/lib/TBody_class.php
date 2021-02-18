<?php

class TBody
{
    private $lista = array();
    private $class;

    public function __construct($class = '') 
    {
        $this->class  = $class;
    }

    public function addElementToTBody($array) 
    {
        $this->lista[] = $array;
    }

    public function __toString()
    {
        $tbody = '<tbody class="'.$this->class.'">';

        foreach ($this->lista as $valor) {
            $tbody .= $valor;
        }
        
        $tbody .= "</tbody>";

        return $tbody;
    }

}