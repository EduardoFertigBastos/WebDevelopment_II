<?php

class H3{
    private $text;
    private $class;

    public function __construct($text, $class = '') {
        $this->text  = $text;
        $this->class = $class;
    }

    public function getH3(){
        return '<h3 class="'.$this->class.'">'.$this->text.'</h3>';
    }

    public function __toString()
    {
        return '<h3 class="'.$this->class.'">'.$this->text.'</h3>';
    }
}