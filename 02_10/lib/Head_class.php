<?php

class Head{
    private $lista = array();

    public function addTag($array) 
    {
        $this->lista[] = $array;
    }

    public function __toString()
    {
        $head = '<head>';

        foreach ($this->lista as $valor) {
            $head .= $valor;
        }
        
        $head .= "</head>";

        return $head;
    }

}