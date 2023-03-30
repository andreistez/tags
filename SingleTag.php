<?php

class SingleTag extends Tag {
	public function render(): void
	{
		$this->setTagStructure();
		echo $this->tagStructure;
	}

	public function setTagStructure(){
		if( ! empty( $this->atts ) ){
			foreach( $this->atts as $name => $value )
				$this->tagStructure .= ' ' . $name . '="' . $value . '"';
		}

		$this->tagStructure = '<' . $this->tagName . $this->tagStructure . ' />';
	}
}

