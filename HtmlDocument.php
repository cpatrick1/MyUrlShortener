<?php

/**
* HTMLDocument
*/

require_once 'utils.php';

class HTMLDocument
{
	function getHtml() {		
		return "<html><body>".
			$this->getContent().
			"</body></html>";
	}

	function getContent() {
		return '';
	}
}


?>