<?php

class H2{
    private $text;
    private $class;

    public function __construct($text, $class = '') {
        $this->text  = $text;
        $this->class = $class;
    }

    public function getH2(){
        return '<h2 class="'.$this->class.'">'.$this->text.'</h2>';
    }

    public function __toString()
    {
        return '<h2 class="'.$this->class.'">'.$this->text.'</h2>';
    }
}