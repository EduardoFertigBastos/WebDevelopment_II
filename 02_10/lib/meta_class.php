<?php

class Meta
{
    private $attributes = array();

    public function __construct($attributes) 
    {
        $this->attributes = $attributes;
    }

    public function getMeta()
    {
        $meta = '<meta ';

        foreach ($this->attributes as $attribute => $val) {
            $meta .= $attribute . '="' . $val . '" ';
        }
        
        $meta .= ">";

        return $meta;
    }

    public function __toString()
    {
        $meta = '<meta ';

        foreach ($this->attributes as $attribute => $val) {
            $meta .= $attribute . '="' . $val . '" ';
        }
        
        $meta .= ">";
        
        return $meta;
    }
}