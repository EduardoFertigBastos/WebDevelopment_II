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
        $html = new Div("container col-6");
        $header = new Div('row', null);
        $header->addElementToDiv(new Div("col-12", new HeaderTitle('Cadastro .Txt', 'text-center')));
        
        $html->addElementToDiv($header);

        $tableHead = new THead('');
        {
            $tableHeadRow = new TR('');
            $tableHeadRow->addElement(new TH('', "ID"));
            $tableHeadRow->addElement(new TH('', "Nome"));
            $tableHeadRow->addElement(new TH('', "Valor"));
            $tableHeadRow->addElement(new TH('', "Estoque"));
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
        
        $html->addElementToDiv(new Table('', 'table table-striped col-8', $tableHead, $tableBody, null));
        $html->addElementToDiv(new Div("col-12 text-center", "<a class='btn btn-warning' href='?action=inserir'>Cadastrar</a>"));
        
		return "" . $html;
    }
}