<?php


class FormCadastroProduto {

    private $title;

    public function __construct($title){
        $this->title = $title;
    }

	public function __toString() {

        $response = "";
        $html = new Div("container");

        $header = new Div('row', null);
        $header->addElementToDiv(new Div("col-10", new HeaderTitle($this->title, 'text-center')));
        $header->addElementToDiv(new Div("col-2 text-center", "<a class='btn btn-info' href='?'>Voltar</a>"));
        $html->addElementToDiv($header);

        $form = new Form(null, null, "POST", null);
        $form->addContent(new Div("row mt-3", new Div("col-6", new Input("nome", "nome", "Nome Produto", "text"))));
        $form->addContent(new Div("row mt-3", new Div("col-3", new Input("valor", "valor", "Preço", "numeric"))));
        $form->addContent(new Div("row mt-3", new Div("col-3", new Input("qntd-estoque", "qntd-estoque", "Estoque", "numeric"))));
        $form->addContent(new Div("row mt-3", new Div("col-2", new Button("Cadastrar", "submit", "btn btn-outline-success"))));
        $html->addElementToDiv($form);

		return "" . $html;
    }
}