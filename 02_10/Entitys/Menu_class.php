<?php

class Menu
{
    private $texto;
    private $acao;

    public function __construct($texto, $acao)
    {
        $this->texto = $texto;
        $this->acao  = $acao;
    }

    public function getTexto()
    {
        return $this->texto;
    }

    public function getAcao()
    {
        return $this->acao;
    }

    public function setTexto($txt)
    {
        $this->texto = $txt;
    }

    public function setAcao($ac)
    {
        $this->acao = $ac;
    }
}