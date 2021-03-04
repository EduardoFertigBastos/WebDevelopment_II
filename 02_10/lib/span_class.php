<?php

class Span
{
    private $lista = array();
    private $class;

    public function __construct($class = '')
    {
        $this->class = $class;
    }

    public function addElementToSpan($array) 
    {
        $this->lista[] = $array;
    }

    public function __toString()
    {
        $span = '<span class="'.$this->class.'">';

        foreach ($this->lista as $valor) {
            $span .= $valor;
        }
        
        $span .= "</span>";

        return $span;
    }

}