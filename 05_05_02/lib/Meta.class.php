<?php

class Meta {

	private $name;
	private $content;

	function __construct($name, $content) {
		$this->name = $name;
		$this->content = $content;
	}

	public function __toString() {
		return '<meta name="' . $this->name . '" content="' . $this->content . '">';
	}

}