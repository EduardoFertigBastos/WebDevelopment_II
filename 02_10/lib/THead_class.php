<?php

class THead 
{
    private $lista = array();
    private $class;

    public function __construct($class = '')
    {
        $this->class  = $class;
    }

    public function addElementToTHead($array) 
    {
        $this->lista[] = $array;
    }

    public function __toString()
    {
        $thead = '<thead class="'.$this->class.'">';

        foreach ($this->lista as $valor) {
            $thead .= $valor;
        }
        
        $thead .= "</thead>";

        return $thead;
    }

    public function createRowTHead($thData)
    {
        
        $trCabecalho = new Tr();
        
        foreach ($thData as $thValue) {
            $th = new Th($thValue);
            $trCabecalho->addElementToTr($th); 
        }
        
        $this->addElementToTHead($trCabecalho);
    }
    
}