<?php

namespace App\Components;

class WysiwygControl extends BaseControl {

	public function render() {


		$this->template->x = 15;

		$this->template->render(__DIR__ . '/default.latte');
	}

	function attachParameters($params) {

	}
}
