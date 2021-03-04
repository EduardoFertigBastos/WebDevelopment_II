<?php

class Tr 
{
    private $lista = array();
    private $class;
    private $colspan;
    private $rowspan;

    public function __construct($class = '', $colspan = '1', $rowspan = '1') 
    {
        $this->class   = $class;
        $this->colspan = $colspan;
        $this->rowspan = $rowspan;
    }

    public function addElementToTr($array) 
    {
        $this->lista[] = $array;
    }

    public function __toString()
    {
        $tr = '<tr class="'.$this->class.'" colspan="'.$this->colspan.'" rowspan="'.$this->rowspan.'">';

        foreach ($this->lista as $valor) {
            $tr .= $valor;
        }
        
        $tr .= "</tr>";

        return $tr;
    }

}