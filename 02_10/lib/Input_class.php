<?php

class Input {
    private $type;
    private $id;
    private $name;
    private $class;

    public function __construct($type, $id, $name, $class)
    {
        $this->type  = $type;
        $this->id    = $id;
        $this->name  = $name;
        $this->class = $class;
    }

    public function getInput() 
    {
        return '<input type="'.$this->type.'" id="'.$this->id.'" 
                    name="'.$this->name.'" class="'.$this->class.'">';
    }

    public function __toString() 
    {
        return '<input type="'.$this->type.'" id="'.$this->id.'" 
                    name="'.$this->name.'" class="'.$this->class.'">';
    }
}