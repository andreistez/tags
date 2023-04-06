<?php

abstract class Tag implements INode
{
	protected string $tagName;
	protected array $atts = [];
	protected array $allowedTagNames = [];

	public function __construct( string $tagName ){
		$this->tagName = $tagName;
	}

	public function attr( string $name, string $value ){
		if( $name && $value ) $this->atts[$name] = $value;

		return $this;
	}

	public function isValid(): bool
	{
		return in_array( $this->tagName, $this->allowedTagNames );
	}

	protected function attrsToString(): string
	{
		$pairs = [];

		foreach( $this->atts as $name => $value ) $pairs[] = "$name=\"$value\"";

		return implode( ' ', $pairs );
	}
}

