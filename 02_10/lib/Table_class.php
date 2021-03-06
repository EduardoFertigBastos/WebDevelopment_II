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
        require_once 'Tr_class.php';
        require_once 'Th_class.php';
        require_once 'Td_class.php';
        require_once 'TBody_class.php';
        require_once 'THead_class.php';
        
        $trCabecalho = new Tr();
    
        foreach ($thData as $thValue) {
            $th = new Th($thValue);
            $trCabecalho->addElementToTr($th); 
        }
        
        $tHead = new tHead();
        $tHead->addElementToTHead($trCabecalho);
        
        // Criação da Tabela de Dados
        $tBody = new TBody();
        foreach ($tdData as $row) {
        
            $tr = new Tr();
            
            foreach ($row as $col) {;
                $td = new Td($col);
                $tr->addElementToTr($td);
            }
        
            $tBody->addElementToTBody($tr);
        }
        
        $this->addElementToTable($tHead);
        $this->addElementToTable($tBody);
    }
    
}