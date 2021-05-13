<?php

class Menu
{
    private $lista = array();
    private $class;

    public function __construct($class = '')
    {
        $this->class = $class;
    }

    public function __toString()
    {
        
        /**
         * NAV MENU MAIN
         */

        // Itens do Menu.
        $a[0] = new Link('', 'Home', 'nav-link');
        $a[1] = new Link('', 'Link', 'nav-link');
        $a[2] = new Link('', 'disabled', 'nav-link disabled');

        $aNavbar = new Link('#', 'Navbar', 'navbar-brand', '');

        // Criação de Listas.
        $ul = new Ul('navbar-nav mr-auto');
        $ul->createListUL($a);

        // Criação de Span.
        $span = new Span(null, 'navbar-toogler-icon');

        // Criação do Button.
        $button = new Button($span, [
            'class' => 'navbar-toggler',
            'type' => 'button',
            'data-toggle' => 'collapse',
            'data-target' => '#navbarSupportedContent',
            'aria-controls' => 'navbarSupportedContent',
            'aria-expanded' => 'false',
            'aria-label' => 'Toggle navigation',
        ]);

        $a[4] = new Link('logoff.php', 'Sair', 'btn btn-warning', '');
        // Criação da Div Navbar Collapse e adicionando a lista. 
        $divNavbarCollapse = new Div('collapse navbar-collapse');
        $divNavbarCollapse->addElementToDiv($ul);
        $divNavbarCollapse->addElementToDiv($a[4]);

        // Criação Nav e adicionando os elementos.
        $navMain = new Nav('navbar navbar-expand-lg navbar-dark bg-dark');
        $navMain->addElementToNav($aNavbar);
        $navMain->addElementToNav($button);
        $navMain->addElementToNav($divNavbarCollapse);

        return $navMain;
    }

}