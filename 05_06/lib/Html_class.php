<?php

class Html
{
    private $language;
    private $lista    = array();

    public function __construct($language)
    {
        $this->language   = $language;
    }

    public function addElementToHtml($array) 
    {
        $this->lista[] = $array;
    }

    public function __toString()
    {
        $html = '<!doctype html>';
        $html = '<html lang="'.$this->language.'">';

        foreach ($this->lista as $valor) {
            $html .= $valor;
        }
        
        $html .= "</html>";

        return $html;
    }

}