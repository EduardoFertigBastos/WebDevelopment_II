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
    
    public function createListButton($itemsMenu) {
        
        foreach($itemsMenu as $itemMenu) {
        
            $itemMenu = new Link('?pg='.$itemMenu[0], $itemMenu[1], 'bg-secondary text-light col-12 py-3', '');
 
            if ($itemsMenu[0] == $itemMenu) {
                $divButton = new Div('row text-center');
            } else {
                $divButton = new Div('row text-center border-top border-transparent');
            }
        
            $divButton->addElementToDiv($itemMenu);
            
            $this->addElementToAside($divButton);
        }   

    }

}