<?php

class Button
{
    private $type;
    private $id;
    private $text;
    private $name;
    private $class;

    public function __construct($id, $name, $text, $class = '', $type = '')
    {
        $this->id    = $id;
        $this->name  = $name;
        $this->text  = $text;
        $this->class = $class;
        $this->type  = $type;
    }

    public function getButton() 
    {
        return '<button type="'.$this->type.'" id="'.$this->id.'" 
                    name="'.$this->name.'" class="'.$this->class.'">'
                    . $this->text
                . '</button';
    }

    public function __toString() 
    {
        return '<button type="'.$this->type.'" id="'.$this->id.'" 
                    name="'.$this->name.'" class="'.$this->class.'">'
                    . $this->text
                . '</button';   }
}