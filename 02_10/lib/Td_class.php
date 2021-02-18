<?php

class Td
{
    private $class;
    private $colspan;
    private $rowspan;

    public function __construct($class = '', $colspan = '1', $rowspan = '1')
    {
        $this->class   = $class;
        $this->colspan = $colspan;
        $this->rowspan = $rowspan;
    }

    public function __toString()
    {
        $td = '<td class="'.$this->class.'" colspan="'.$this->colspan.'" rowspan="'.$this->rowspan.'">';

        foreach ($this->lista as $valor) {
            $td .= $valor;
        }
        
        $td .= "</td>";

        return $td;
    }

}