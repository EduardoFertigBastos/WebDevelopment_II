<?php

class Header {
	private $lista = array();

	public function addElementToHeader($array) {
		$this->lista[] = $array;
	}

	public function __toString() {
		$header = '<header>';

		foreach ($this->lista as $valor) {
			$header .= $valor;
		}

		$header .= "</header>";

		return $header;
	}

}