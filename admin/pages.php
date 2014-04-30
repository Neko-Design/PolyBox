<?php
$footer = "Proudly powered by Polyobox - Copyright (c) 2013 Ewen McCahon";
function check_active($pide, $pidx) {
	if ($pide == $pidx) {
		echo "current";
	}
}
function check_active_nav($pide, $pidx) {
	if ($pide == $pidx) {
		echo "active";
	}
}
function checked($row) {
	if ($row == "1") {
		echo "checked";
	}
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
		$text = "1337";
	}
	/*	include("connection.php");
	$sql = "SELECT * FROM `posts` WHERE POST_SLUG=$text";
	$esql = mysql_query( $sql, $con );
	if(! $esql )
	{
	  die('Could not get data: ' . mysql_error());
	}
	mysql_close($con);*/
	//if (mysql_num_rows($esql) == 0) {
		return $text;
	//} else {
	//	return "1337";
	//}
}
?>