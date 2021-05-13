<?php

class HeaderTitle {

	private $txt;
	private $class;

	function __construct($txt, $class = '') {
		$this->txt = $txt;
		$this->class = $class;
	}

	public function __toString() {
		return '<h1 class="' . $this->class . '">' . $this->txt . '</h1>';
	}

}