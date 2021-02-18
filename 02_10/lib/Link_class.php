<?php

class Link
{
    private $url;
    private $text;
    private $target;
    private $class;

    public function __construct($url, $text, $target, $class)
    {
        $this->url      = $url;
        $this->text     = $text;
        $this->target   = $target;
        $this->class    = $class;
    }

    public function getLink() 
    {
        return '<a href="'.$this->url.'" target="'.$this->target.'" class="'.$this->class.'">'. 
                    $this->text .
                '</a>';
    }

    public function __toString() 
    {
        return '<a href="'.$this->url.'" target="'.$this->target.'" class="'.$this->class.'">'. 
                    $this->text .
                '</a>';
    }
}