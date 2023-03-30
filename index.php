<?php

require_once 'Tag.php';
require_once 'SingleTag.php';
require_once 'PairTag.php';

$img = new SingleTag( 'img' );
$img->attr( 'src', 'some/azaza.png' );
$img->attr( 'alt', 'Image azazaz' );

$br = new SingleTag( 'br' );

$a = new PairTag( 'a' );
$a->attr( 'href', '/' );
$a->appendChild( $img );

$p = new PairTag( 'p' );
$p->attr( 'class', 'some stupid class' );
$p->attr( 'id', 'best-id' );
$p->appendChild( 'Some text 1' );
$p->appendChild( $br );
$p->appendChild( $a );
$p->appendChild( $br );
$p->appendChild( $a );
$p->appendChild( $br );
$p->appendChild( 'Some text 2' );
$p->render();

