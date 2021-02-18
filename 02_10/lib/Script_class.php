<?php

class Script
{
    private $src;
    private $attributes;

    public function __construct($src, $attributes = []) 
    {
        $this->src = $src;
        $this->attributes = $attributes;
    }

    public function getScript()
    {
        $script = '<script src="'.$this->src.'" ';

        foreach ($this->attributes as $attribute => $val) {
            $script .= $attribute . '="' . $val . '" ';
        }
        
        $script .= "></script>";

        return $script;
    }

    public function __toString()
    {
        $script = '<script src="'.$this->src.'" ';

        foreach ($this->attributes as $attribute => $val) {
            $script .= $attribute . '="' . $val . '" ';
        }
        
        $script .= "></script>";

        return $script;
    }
}