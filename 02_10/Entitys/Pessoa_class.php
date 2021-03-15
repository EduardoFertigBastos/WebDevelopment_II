<?php

class Menu
{
    private $id;
    private $nome;
    private $email;
    private $usu_id;
    private $datacadastro;
    private $dataalteracao;

    public function __construct($id, $nome, $email, $usu_id, $datacadastro, $dataalteracao)
    {
        $this->id            = $id;
        $this->nome          = $nome;
        $this->email         = $email;
        $this->usu_id        = $usu_id;
        $this->datacadastro  = $datacadastro;
        $this->dataalteracao = $dataalteracao;
    }

    public function getId()
    {
        return $this->id;
    }

    public function getNome()
    {
        return $this->nome;
    }

    public function getEmail()
    {
        return $this->email;
    }

    public function getUsu_id()
    {
        return $this->usu_id;
    }

    public function getDatacadastro()
    {
        return $this->datacadastro;
    }

    public function getDataalteracao()
    {
        return $this->dataalteracao;
    }

    public function setNome($nome)
    {
        $this->nome = $nome;
    }

    public function setEmail($email)
    {
        $this->email = $email;
    }

    public function setUsu_id($usu_id)
    {
        $this->usu_id = $usu_id;
    }
    
    public function setDatacadastro($datacadastro)
    {
        $this->datacadastro = $datacadastro;
    }

    public function setDataalteracao($dataalteracao)
    {
        $this->dataalteracao = $dataalteracao;
    }
}