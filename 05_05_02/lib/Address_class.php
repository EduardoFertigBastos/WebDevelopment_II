<?php

class Address {
	private $lista = array();
	private $class;

	public function __construct($class = '') {
		$this->class = $class;
	}

	public function addElementToAddress($array) {
		$this->lista[] = $array;
	}

	public function __toString() {
		$address = '<address class="' . $this->class . '">';

		foreach ($this->lista as $valor) {
			$address .= $valor;
		}

		$address .= "</address>";

		return $address;
	}

}