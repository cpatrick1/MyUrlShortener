<?php

/**
* Hello World
*/

//require 'HtmlDocument.php';

require_once 'utils.php';

class HelloWorld  extends HtmlDocument {
	public  $world;

	function __construct($world) {
		$this->world = $world;
	}

	function getContent() {
		return "Hello, ".$this->world."!";
	}
}

$greetings = new HelloWorld('Meredith');
echo $greetings->getHtml();
	

?>