<?php

class SingleTag extends Tag
{
	protected array $allowedTagNames = ['img', 'br', 'hr'];

	public function render(): string
	{
		return "<{$this->tagName} {$this->attrsToString()} />";
	}
}

