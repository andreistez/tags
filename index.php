<?php

require_once 'interfaces/IRenderable.php';
require_once 'interfaces/IValidable.php';
require_once 'interfaces/INode.php';
require_once 'Tag.php';
require_once 'SingleTag.php';
require_once 'PairTag.php';
require_once 'TextNode.php';

echo ( new PairTag( 'p' ) )
	->attr( 'id', 'best-id' )
	->attr( 'class', 'some stupid class' )
	->appendChild( new TextNode( 'Some text 1' ) )
	->appendChild( new SingleTag( 'br' ) )
	->appendChild(
		( new PairTag( 'a' ) )
			->attr( 'href', '/' )
			->appendChild(
				( new SingleTag( 'img' ) )
					->attr( 'src', 'some/azaza.png' )
					->attr( 'alt', 'Image azazaz' )
			)
	)
	->appendChild(
		( new PairTag( 'a' ) )
			->attr( 'href', '/' )
			->appendChild(
				( new SingleTag( 'img' ) )
					->attr( 'src', 'some/azaza.png' )
					->attr( 'alt', 'Image azazaz' )
			)
	)
	->appendChild( new SingleTag( 'br' ) )
	->appendChild( new TextNode( 'Some text 2' ) )
	->render();

