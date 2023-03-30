<?php

class PairTag extends Tag {
	public array $children = [];

	public function render(): void
	{
		$this->setTagStructure();
		echo $this->tagStructure;
	}

	public function setTagStructure(){
		$this->tagStructure .= '<' . $this->tagName;

		if( ! empty( $this->atts ) ){
			foreach( $this->atts as $name => $value )
				$this->tagStructure .= ' ' . $name . '="' . $value . '"';
		}

		$this->tagStructure .= '>';	// End of opening tag.

		if( ! empty( $this->children ) ){
			foreach( $this->children as $child ){
				$this->tagStructure .= $child;
			}
		}

		$this->tagStructure .= '</' . $this->tagName . '>';	// Closing tag.
	}

	public function appendChild( $child ): void
	{
		if( $child instanceof Tag ){
			$child->deleteTagStructure();
			$child->setTagStructure();
			$this->children[] = $child->getTagStructure();
		}	else {
			$this->children[] = strip_tags( $child );
		}
	}
}

