<?php

class H6{
    private $text;
    private $class;

    public function __construct($text, $class = '') {
        $this->text  = $text;
        $this->class = $class;
    }

    public function getH6(){
        return '<h6 class="'.$this->class.'">'.$this->text.'</h6>';
    }

    public function __toString()
    {
        return '<h6 class="'.$this->class.'">'.$this->text.'</h6>';
    }
}