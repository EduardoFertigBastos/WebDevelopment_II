<?php

class Aside 
{
    private $lista = array();
    private $class;

    public function __construct($class = '') 
    {
        $this->class = $class;
    }

    public function addElementToAside($array) 
    {
        $this->lista[] = $array;
    }

    public function __toString()
    {
        $aside = '<aside class="'.$this->class.'">';

        foreach ($this->lista as $valor) {
            $aside .= $valor;
        }
        
        $aside .= "</aside>";

        return $aside;
    }
    
    public function createListButton($class, $border) {
        
        for($x = 0; $x < 9; $x++) {
        
            $button = new Button('Button', [
                'class' => $class
            ]);
        

            if ($x <> 0) {
                $divButton = new Div('row ' . $border);
            } else {
                $divButton = new Div('row');
            }
        
            $divButton->addElementToDiv($button);
            
            $this->addElementToAside($divButton);
        }    
    }

}