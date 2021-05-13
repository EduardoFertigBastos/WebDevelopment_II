<?php


class FormCadastroProduto {

    private $title;

    public function __construct($title){
        $this->title = $title;
    }

	public function __toString() {

        $response = "";
        $html = new Div("container col-4");

        $header = new Div('row', null);
        $header->addElementToDiv(new Div("col-12", new HeaderTitle('Cadastrar', 'text-center')));
        $html->addElementToDiv($header);
        
        $form = new Form(null, null, "POST", null);
        $form->addContent(new Div("row mt-3", new Div("col-12", new Input("nome", "nome", "Nome Produto", "text"))));
        $form->addContent(new Div("row mt-3", new Div("col-12", new Input("valor", "valor", "Preço", "numeric"))));
        $form->addContent(new Div("row mt-3", new Div("col-12", new Input("qntd-estoque", "qntd-estoque", "Estoque", "numeric"))));
        $form->addContent(new Div("row mt-3", new Div("col-12 text-center", new Button("Cadastrar", "submit", "btn btn-primary"), "<a class='btn btn-warning' href='?'>Voltar</a>")));
        $html->addElementToDiv($form);
        
		return "" . $html;
    }
}