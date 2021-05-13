<?php

class Img {
	private $src;
	private $alt;

	public function __construct($src, $alt) {
		$this->src = $src;
		$this->alt = $alt;
	}

	public function __toString() {
		$img = '<img src="' . $this->src . '" alt="' . $this->alt . '">';

		return $img;
	}

}