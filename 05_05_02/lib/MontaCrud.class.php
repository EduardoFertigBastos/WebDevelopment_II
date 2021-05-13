<?php


class MontaCrud {

    private $title;
    private $content;

    public function __construct($title, $content){
        $this->title = $title;
        $this->content = $content;
    }

	public function __toString() {

        $response = "";
        $html = new Div("container");

        $header = new Div('row', null);
        $header->addElementToDiv(new Div("col-10", new HeaderTitle($this->title, 'text-center')));
        $header->addElementToDiv(new Div("col-2 text-center", "<a class='btn btn-info' href='?action=inserir'>Novo Produto</a>"));
        $html->addElementToDiv($header);

        $tableHead = new THead('');
        {
            $tableHeadRow = new TR('');
            $tableHeadRow->addElement(new TH('', "ID"));
            $tableHeadRow->addElement(new TH('', "Nome"));
            $tableHeadRow->addElement(new TH('', "Valor"));
            $tableHeadRow->addElement(new TH('', "Quantidade em Estoque"));
            $tableHead->addElement($tableHeadRow);
        }

        $tableBody = new TBody('');
        foreach($this->content as $val){
            $tableBodyRow = new TR('');
            $tableBodyRow->addElement(new TD('', $val->id));
            $tableBodyRow->addElement(new TD('', $val->nome));
            $tableBodyRow->addElement(new TD('', $val->valor));
            $tableBodyRow->addElement(new TD('', $val->quantidadeEstoque));
            $tableBody->addElement($tableBodyRow);
        }
        
        $html->addElementToDiv(new Table('', 'table table-dark', $tableHead, $tableBody, null));

		return "" . $html;
    }
}