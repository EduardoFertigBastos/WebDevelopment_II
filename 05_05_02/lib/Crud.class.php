<?php


class Crud {

    private $title;
    private $sql;

    public function __construct($title, $sql){
        $this->title = $title;
        $this->sql = $sql;
    }

	public function __toString() {
        
        $conn = new Conexao();

        $html = "";
        $html .= new Div('row', new HeaderTitle($this->title, 'text-center'));

        $isHeadDefined = false;
        $tableHead = new THead('');
        $tableBody = new TBody('');

        $sql = $conn->getSelect($this->sql);
        foreach($sql as $row){
            if(!$isHeadDefined){
                $thContent = new TR('');
                foreach(array_keys($row) as $key){
                    $thContent->addElement(new TH('', $key));
                }
                $tableHead->addElement($thContent);
                $isHeadDefined = true;
            }
            $trContent = new TR('');
            foreach($row as $value){
                $trContent->addElement(new TD('', $value));
            }
            $tableBody->addElement($trContent);
        }
        $html .= new Table('', 'table table-dark', $tableHead, $tableBody, null);

		return $html;
	}
}