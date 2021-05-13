<?php

class Login {

	public function __toString() {
		$form = new Form("sigin", "sigin", "POST", "form-signin",
			new HeaderTitle("LOGIN", 'text-center mb-3'),
			new Input("email", "email", "Email", "email", null),
			new Input("pass", "pass", "Senha", "password", null),
			new Button("Login", "submit")
		);
		$form->setAction("./login");

		$html = "" . new Div("color-default-background text-center", $form);

		return $html;
	}
}