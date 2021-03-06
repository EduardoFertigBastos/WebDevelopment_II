<?php

class Button
{
    private $text;
    private $attributes;

    public function __construct($text, $attributes = []) 
    {
        $this->text = $text;
        $this->attributes = $attributes;
    }

    public function getButton()
    {
        $button = '<button  ';

        foreach ($this->attributes as $attribute => $val) {
            $button .= $attribute . '="' . $val . '" ';
        }
        
        $button .= '>' . $this->text . '</button>';

        return $button;
    }

    public function __toString()
    {
        $button = '<button  ';

        foreach ($this->attributes as $attribute => $val) {
            $button .= $attribute . '="' . $val . '" ';
        }
        
        $button .= '>' . $this->text . '</button>';

        return $button;
    }
}