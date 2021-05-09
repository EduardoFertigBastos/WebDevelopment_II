<?php

class Footer
{
    private $lista = array();
    private $class;

    public function __construct($class = '')
    {
        $this->class = $class;
    }

    public function addElementToFooter($array) 
    {
        $this->lista[] = $array;
    }

    public function __toString()
    {
        $footer = '<footer class="'.$this->class.'">';

        foreach ($this->lista as $valor) {
            $footer .= $valor;
        }
        
        $footer .= "</footer>";

        return $footer;
    }

}