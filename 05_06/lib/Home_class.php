<?php

class Home
{
    private $lista = array();
    private $class;

    public function __construct($class = '')
    {
        $this->class = $class;
    }

    public function addElementToHome($array) 
    {
        $this->lista[] = $array;
    }

    public function __toString()
    {
        /**
         * Criação do Aside
         */
        
        $conn = new Connection();
        $itemsMenu = $conn->select(' SELECT acao, texto
                                    FROM menu');

        $aside = new Aside('col-2 d-flex flex-column');
        $aside->createListButton($itemsMenu);


        /**
         * Table
         */

        // Dados
        $thData = ['#', 'Nome', 'E-mail', 'Data de Cadastro', 'Ações'];
        $tdData = $conn->select(' SELECT id, nome, email, datacadastro
                                    FROM pessoa');


        // Criação do Cabeçalho


        // Criação da Tabela em Definitivo
        $table = new Table('table table-striped');
        $table->createTable($thData, $tdData);

        /**
         * Pagination 
         */

        // Array de dados pro menu de Pagination.
        $pgData = ['Previous', 1, 2, 3, 'Next'];

        $ulPagination = new Ul('pagination');
        $ulPagination->createPagination($pgData);

        // Criação do NavPagination
        $navPagination = new Nav('d-flex justify-content-center');
        $navPagination->addElementToNav($ulPagination);

        // Section Buttons
        $divRight = new Div('col-10 d-flex flex-column');

        $sectionButtons        = new Section(['id' => 'sectionButtons', 'class' => 'my-2']);

        $buttonMostrarCadastro = new Button('Mostrar Formulário', [
            'id'    => 'buttonMostrarCadastro',
            'class' => 'btn btn-primary col-2 py-2'
        ]);

        $buttonMostrarTabela   = new Button('Mostrar Tabela', [
            'id'    => 'buttonMostrarTabela',
            'class' => 'btn btn-primary col-2 py-2 ml-2'
        ]);

        $buttonMostrarUpdate   = new Button('Mostrar UPDATE', [
            'id' => 'buttonMostrarUpdate',
            'class' => 'btn btn-primary col-2 py-2 ml-2'
        ]);

        $sectionButtons->addElementToSection($buttonMostrarCadastro);
        $sectionButtons->addElementToSection($buttonMostrarTabela);
        $sectionButtons->addElementToSection($buttonMostrarUpdate);


        $divRight->addElementToDiv($sectionButtons);
        /**
         * Section Table.
         */

        $sectionTable = new Section([
            'id'    => 'sectionTable'
        ]);

        $sectionTable->addElementToSection($table);
        $sectionTable->addElementToSection($navPagination);

        $divRight->addElementToDiv($sectionTable);

        $main = new Main('d-flex justify-content-between');
        $main->addElementToMain($aside);
        $main->addElementToMain($divRight);

        $script1 = new Script('https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js', [
            'integrity'   => 'sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0',
            'crossorigin' => 'anonymous',
        ]);

        $script2 = new Script('https://code.jquery.com/jquery-3.6.0.js', [
            'integrity'   => 'sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=',
            'crossorigin' => 'anonymous'
        ]);

        $script3 = new Script('./assets/js/script.js');

        $this->addElementToHome($main);
        $this->addElementToHome($script1);
        $this->addElementToHome($script2);
        $this->addElementToHome($script3);


        return $this;
    }

}