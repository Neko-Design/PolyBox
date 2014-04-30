<?php
//Main PolyBox function
function polybox($content) {
	$content = str_replace("--request_uri--", $_SERVER['REQUEST_URI'], $content);
	echo $content;
}
function makeslug($text) { 
	// replace non letter or digits by -
	$text = preg_replace('~[^\\pL\d]+~u', '-', $text);
	// trim
	$text = trim($text, '-');
	// transliterate
	$text = iconv('utf-8', 'us-ascii//TRANSLIT', $text);
	// lowercase
	$text = strtolower($text);
	// remove unwanted characters
	$text = preg_replace('~[^-\w]+~', '', $text);
	if (empty($text)) {
		return false;
	}
	return $text;
}
?>