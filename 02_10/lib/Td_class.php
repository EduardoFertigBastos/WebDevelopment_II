<?php

class Td
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
        $td = '<td class="'.$this->class.'" colspan="'.$this->colspan.'" rowspan="'.$this->rowspan.'">';

        $td .= $this->text;
        
        $td .= "</td>";

        return $td;
    }

}