<?php

class Menu
{
    private $id;
    private $texto;
    private $acao;

    public function __construct($id, $texto, $acao)
    {
        $this->id = $id;
        $this->texto = $texto;
        $this->acao  = $acao;
    }

    public function getId()
    {
        return $this->id;
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