<?php

namespace App\Presenters;

use Nette\Application\UI\Presenter;
use Nette\Database\Context;
use App\Components;

class BasePresenter extends Presenter {
	/** @var Nette\Database\Context */
	protected $database;

	public function __construct(Context $database) {
		$this->database = $database;
	}

	protected function createComponentWysiwyg() {
		return new Components\WysiwygControl();
	}
}