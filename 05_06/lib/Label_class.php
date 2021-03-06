<?php

class Label
{
    private $text;
    private $id;
    private $name;
    private $class;

    public function __construct($text, $id, $class = '')
    {
        $this->text  = $text;
        $this->id    = $id;
        $this->class = $class;
    }

    public function getLabel() 
    {
        return '<label for="'.$this->id.'" class="'.$this->class.'">'
                    . $this->text 
                . '</label>';
    }

    public function __toString() 
    {
        return '<label id="'.$this->id.'" name="'.$this->name.'" class="'.$this->class.'">'
                    . $this->text 
                . '</label>';
    }
}