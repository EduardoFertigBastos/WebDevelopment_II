<?php

class Th
{
    private $text;
    private $class;
    private $colspan;
    private $rowspan;

    public function __construct($text, $class = '', $colspan = '1', $rowspan = '1')
    {
        $this->text   = $text;
        $this->class   = $class;
        $this->colspan = $colspan;
        $this->rowspan = $rowspan;
    }

    public function __toString()
    {
        $th = '<th class="'.$this->class.'" colspan="'.$this->colspan.'" rowspan="'.$this->rowspan.'">';

        $th .= $this->text;
        
        $th .= "</th>";

        return $th;
    }

}