<?php

abstract class Tag {
	protected string $tagName;
	protected array $atts = [];
	protected string $tagStructure = '';

	public function __construct( string $tagName ){
		$this->tagName = $tagName;
	}

	public function attr( string $name, string $value ){
		if( $name && $value ) $this->atts[$name] = $value;
	}

	public function getTagStructure(): string
	{
		return $this->tagStructure;
	}

	public function deleteTagStructure(): void
	{
		$this->tagStructure = '';
	}

	public abstract function setTagStructure();

	public abstract function render(): void;
}

