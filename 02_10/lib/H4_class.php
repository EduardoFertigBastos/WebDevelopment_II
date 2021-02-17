<?php

class H4{
    private $text;
    private $class;

    public function __construct($text, $class = '') {
        $this->text  = $text;
        $this->class = $class;
    }

    public function getH4(){
        return '<h4 class="'.$this->class.'">'.$this->text.'</h4>';
    }

    public function __toString()
    {
        return '<h4 class="'.$this->class.'">'.$this->text.'</h4>';
    }
}