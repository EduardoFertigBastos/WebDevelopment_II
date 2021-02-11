<?php

class Script{
    private $src;

    public function __construct($src) {
        $this->src = $src;
    }

    public function getScript(){
        return '<script>'.$this->src.'</script>';
    }

    public function __toString()
    {
        return '<li class="'.$this->class.'">'.$this->text.'</li>';
    }
}