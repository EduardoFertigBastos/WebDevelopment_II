<?php

class Li
{
    private $text;
    private $class;

    public function __construct($text, $class)
    {
        $this->text = $text;
        $this->class = $class;
    }

    public function getLi(){
        return '<li class="'.$this->class.'">'.$this->text.'</li>';
    }

    public function __toString()
    {
        return '<li class="'.$this->class.'">'.$this->text.'</li>';
    }
}