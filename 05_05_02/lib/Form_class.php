<?php


class Form {

	private $id;
	private $name;
	private $action;
	private $autocomplete;
	private $method;
	private $enctype;
	private $novalidate;
	private $classes;
	private $content = array();

	/**
	 * Form constructor.
	 * @param $id
	 * @param $name
	 * @param $method
	 * @param $content
	 */
	public function __construct($id, $name, $method, $classes, ...$content) {
		$this->id = $id;
		$this->name = $name;
		$this->method = $method;
		$this->classes = $classes;
		$this->content = array_merge($this->content, $content);
	}

	function addContent(...$content) {
		$this->content = array_merge($this->content, $content);
	}

	/**
	 * Specifies where to send the form-data when a form is submitted
	 * @param string $action
	 */
	public function setAction($action) {
		$this->action = $action;
	}

	/**
	 * Specifies whether a form should have autocomplete on or off
	 * "on" or "off" to turn on or off the form autocomplete
	 * @param string $autocomplete
	 */
	public function setAutocomplete($autocomplete) {
		$this->autocomplete = $autocomplete;
	}

	/**
	 * Specifies how the form-data should be encoded when submitting it to the server (only for method="post")
	 * @param mixed $enctype
	 */
	public function setEnctype($enctype) {
		$this->enctype = $enctype;
	}

	/**
	 * Specifies that the form should not be validated when submitted
	 * @param boolean $novalidate
	 */
	public function setNovalidate($novalidate) {
		$this->novalidate = $novalidate;
	}

	public function __toString() {
		$html = "<form";
		if (isset($this->id) && !is_null($this->id)) {
			$html .= " id='" . $this->id . "'";
		}

		if (isset($this->name) && !is_null($this->name)) {
			$html .= " name='" . $this->name . "'";
		}

		if (isset($this->method) && !is_null($this->method)) {
			$html .= " method='" . $this->method . "'";
		}

		if (isset($this->classes) && !is_null($this->classes)) {
			$html .= " class='" . $this->classes . "'";
		}

		if (isset($this->action) && !is_null($this->action)) {
			$html .= " action='" . $this->action . "'";
		}

		if (isset($this->autocomplete) && !is_null($this->autocomplete)) {
			$html .= " autocomplete='" . $this->autocomplete . "'";
		}

		if (isset($this->enctype) && !is_null($this->enctype)) {
			$html .= " enctype='" . $this->enctype . "'";
		}

		if (isset($this->novalidate) && $this->novalidate) {
			$html .= " novalidate";
		}
		$html .= ">";

		foreach ($this->content as $obj) {
			$html .= $obj;
		}

		$html .= "</form>";

		return $html;
	}


}