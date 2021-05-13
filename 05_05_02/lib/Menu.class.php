<?php


class Menu {

	public function __toString() {

		$conn = new Conexao();

		$listaMenu = new Ul("list-group");
		foreach ($conn->getSelect("SELECT * FROM MENU") as $row){
			$listaMenu->addElement(new Li("list-group-item", "<a class='nav-link' href='?action=" . $row['acao'] . "'>". $row['texto'] . "</a>"));
		}

		$menu = "" . new Div("col-sm-2",$listaMenu);

		return $menu;
	}
}