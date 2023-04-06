<?php

class TextNode implements INode
{
	protected string $text;

	public function __construct( string $text ){
		$this->text = trim( $text );
	}

	public function render(): string
	{
		return $this->text;
	}

	public function isValid(): bool
	{
		if( $this->text ) return true;

		return false;
	}
}

