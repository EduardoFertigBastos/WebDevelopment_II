<?php

class Ul
{
    private $lista = array();
    private $class;

    public function __construct($class)
    {
        $this->class = $class;
    }

    public function addLi($array) 
    {
        $this->lista[] = $array;
    }

    public function __toString()
    {
        $ul = '<ul class="' . $this->class . '">';

        foreach ($this->lista as $valor) {
            $ul .= $valor;
        }
        
        $ul .= "</ul>";

        return $ul;
    }

    public function createListUL($array) {

        for ($x = 0;  $x < sizeof($array); $x++) {
            $li = new Li($array[$x], 'nav-item');
            $this->addLi($li);
        }
    }
    
    function createPagination($pgData) {
        require_once 'Link_class.php';
        require_once 'Li_class.php';

        foreach($pgData as $element) {
            $a  = new Link('#',$element, 'page-link', '');
            $li = new Li($a, 'page-item');
            $this->addLi($li);
        }
    }

}