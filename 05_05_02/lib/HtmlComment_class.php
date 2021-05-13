<?php

class HtmlComment {

    private $txt;

    function __construct($txt) {
        $this->txt    = $txt;
    }

    public function __toString() {
        return '<!-- ' . $this->txt . ' -->';
	}
}