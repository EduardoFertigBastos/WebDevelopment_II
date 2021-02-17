<?php

class H5{
    private $text;
    private $class;

    public function __construct($text, $class = '') {
        $this->text  = $text;
        $this->class = $class;
    }

    public function getH5(){
        return '<h5 class="'.$this->class.'">'.$this->text.'</h5>';
    }

    public function __toString()
    {
        return '<h5 class="'.$this->class.'">'.$this->text.'</h5>';
    }
}