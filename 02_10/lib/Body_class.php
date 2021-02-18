<?php

class Body
{
    private $lista = array();
    private $class;

    public function __construct($class = '')
    {
        $this->class = $class;
    }

    public function addElementToBody($array) 
    {
        $this->lista[] = $array;
    }

    public function __toString()
    {
        $body = '<body class="'.$this->class.'">';

        foreach ($this->lista as $valor) {
            $body .= $valor;
        }
        
        $body .= "</body>";

        return $body;
    }

}