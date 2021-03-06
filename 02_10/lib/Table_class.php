<?php

class Table
{
    private $lista = array();
    private $class;

    public function __construct($class = '')
    {
        $this->class  = $class;
    }

    public function addElementToTable($array) 
    {
        $this->lista[] = $array;
    }

    public function __toString()
    {
        $table = '<table class="'.$this->class.'">';

        foreach ($this->lista as $valor) {
            $table .= $valor;
        }
        
        $table .= "</table>";

        return $table;
    }

    function createTable($thData, $tdData) {
            

        $tHead = new tHead();
        $tHead->createRowTHead($thData);
        
        // Criação da Tabela de Dados
        $tBody = new TBody();
        $tBody->createRowsTBody($tdData);
        
        
        $this->addElementToTable($tHead);
        $this->addElementToTable($tBody);
    }
    
}