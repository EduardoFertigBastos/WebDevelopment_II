<?php

class Head
{
    private $lista = array();

    public function addElementToHead($array) 
    {
        $this->lista[] = $array;
    }

    public function __toString()
    {
        /**
        * Parte relacionada ao Head
        */
       
        $charset = new Meta([
           'charset' => 'utf-8'
        ]);
       
        $viewport = new Meta([
           'name' => 'viewport',
           'content' => 'width=device-width, initial-scale=1'
        ]);
       
        $linkNormalize = new LinkHead([
           'rel'  => 'stylesheet',
           'href' => 'assets/css/normalize.css',
        ]);
       
        $linkCss = new LinkHead([
           'href'        => 'https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css',
           'rel'         => 'stylesheet',
           'integrity'   => 'sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh',
           'crossorigin' => 'anonymous'
        ]);
       
        $title = new Title('Menu');
       
        $this->addElementToHead($charset);
        $this->addElementToHead($viewport);
        $this->addElementToHead($linkNormalize);
        $this->addElementToHead($linkCss);
        $this->addElementToHead($title);
        
        $head = '<head>';

        foreach ($this->lista as $valor) {
            $head .= $valor;
        }
        
        $head .= "</head>";

        return $head;
    }

}