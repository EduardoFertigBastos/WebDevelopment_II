<?php

class P
{
    private $text;
    private $class;

    public function __construct($text, $class = '')
    {
        $this->text  = $text;
        $this->class = $class;
    }

    public function __toString()
    {
        $p = '<p class="'.$this->class.'">' 
                . $this->text
            . '</p>';

        return $p;
    }

}