<?php

namespace David\Crud\View;

class View{

	protected $templatePath;
	protected $attributes;

	public function __construct($templatePath = "", $attributes = []){
		$this->templatePath = rtrim($templatePath, '/\\') . '/';
		$this->attributes = $attributes;
	}

	public function render(string $template, array $data = []){
		$data = array_merge($this->attributes, $data);
		$templateFile = $this->templatePath . $template;
		extract($data);

		include $templateFile;
	}
}