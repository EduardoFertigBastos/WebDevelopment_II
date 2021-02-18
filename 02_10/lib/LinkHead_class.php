<?php

class LinkHead
{
    private $attributes = array();

    public function __construct($attributes)
    {
        $this->attributes = $attributes;
    }

    public function getLink()
    {
        $link = '<link ';

        foreach ($this->attributes as $attribute => $val) {
            $link .= $attribute . '="' . $val . '" ';
        }
        
        $link .= ">";

        return $link;
    }

    public function __toString()
    {
        $link = '<link ';

        foreach ($this->attributes as $attribute => $val) {
            $link .= $attribute . '="' . $val . '" ';
        }
        
        $link .= ">";
        
        return $link;
    }
}