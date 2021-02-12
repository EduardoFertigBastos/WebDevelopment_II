<?php

class LinkHead{
    private $attributes = array();

    public function __construct($attributes) {
        $this->attributes = $attributes;
    }

    public function getLink()
    {
        $Link = '<link ';

        foreach ($this->attributes as $attribute => $val) {
            $Link .= $attribute . '="' . $val . '" ';
        }
        
        $Link .= ">";

        return $Link;
    }

    public function __toString()
    {
        $Link = '<link ';

        foreach ($this->attributes as $attribute => $val) {
            $Link .= $attribute . '="' . $val . '" ';
        }
        
        $Link .= ">";
        
        return $Link;
    }
}