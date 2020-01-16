<?php

namespace App\Components;

use App\Model\ControlManager;
use Nette\Application\UI\Control;

abstract class BaseControl extends Control {
	private $model;

	public function __construct() {
		parent::__construct();

		//$this->model = new ControlManager(); // <- volání tohoto příkazu způsobí Error - Class 'App\Model\ControlManager' not found
	}

	public function render() {
		$this->template->render(__DIR__ . '/default.latte');
	}

	abstract function attachParameters($params);
}
