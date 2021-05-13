<?php


class TFoot {
	private $classes;
	private $trs;

	/**
	 * TFoot constructor.
	 * @param $classes
	 * @param $trs
	 */
	public function __construct($classes, array $trs) {
		$this->classes = $classes;
		$this->trs = $trs;
	}

	function addTr($tr) {
		$this->trs[] = $tr;
	}

	public function __toString() {
		$html = "<tfoot";
		if (!is_null($this->classes) && !empty($this->classes)) {
			$html .= " class='" . $this->classes . "'";
		}
		$html .= ">";

		foreach ($this->trs as $obj) {
			$html .= $obj;
		}

		$html .= "</tfoot>";

		return $html;
	}
}