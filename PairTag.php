<?php

class PairTag extends Tag
{
	protected array $allowedTagNames = ['div', 'span', 'p', 'a'];
	protected array $children = [];

	public function appendChild( INode $child ): PairTag
	{
		$this->children[] = $child;

		return $this;
	}

	public function render(): string
	{
		$childrenHTML = array_map( function( INode $tag ){
			return $tag->isValid() ? $tag->render() : '';
		}, $this->children );

		$innerHTML = implode( '', $childrenHTML );

		return "<{$this->tagName} {$this->attrsToString()}>$innerHTML</{$this->tagName}>";
	}
}

