<?php

class Span
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
        $span = '<span class="'.$this->class.'">';

        $span .= $this->text; 
        
        $span .= "</span>";

        return $span;
    }

}