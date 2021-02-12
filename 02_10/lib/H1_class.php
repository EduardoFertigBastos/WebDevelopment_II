<?php

class H1{
    private $text;
    private $class;

    public function __construct($text, $class) {
        $this->text  = $text;
        $this->class = $class;
    }

    public function getH1(){
        return '<h1 class="'.$this->class.'">'.$this->text.'</h1>';
    }

    public function __toString()
    {
        return '<h1 class="'.$this->class.'">'.$this->text.'</h1>';
    }
}