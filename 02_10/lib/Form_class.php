<?php

class Form{
    private $lista = array();
    private $class;
    private $method;
    private $action;

    public function __construct($class = '', $method, $action) {
        $this->class  = $class;
        $this->method = $method;
        $this->action = $action;
    }

    public function addElementToForms($array) 
    {
        $this->lista[] = $array;
    }

    public function __toString()
    {
        $form = '<form class="'.$this->class.'" method="'.$this->method.'" action="'.$this->action.'">';

        foreach ($this->lista as $valor) {
            $form .= $valor;
        }
        
        $form .= "</form>";

        return $form;
    }

}