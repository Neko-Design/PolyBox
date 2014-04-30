<?php
include("pages.php");
if (!($_COOKIE['siteauth']=="666")) {
	header("Location: ../404");
}
include("connection.php");
// $content
$content = mysql_real_escape_string($_POST['post_content']);
// $title
if ($_POST['post_title'] == '') {
	$title = "Untitled Post";
} else {
	$title = $_POST['post_title'];
}
//$slug
$slug = makeslug($title);
if ($slug == "1337") {
	header("location: create.php?error=3");
}
//$user
if ($_POST['post_user'] == '') {
	$user = "Guest";
} else {
	$user = $_POST['post_user'];
}
//$date
$date = date('F jS Y');
// $tags
$tags = $_POST['tags'];
// $vis
$vis = $_POST['vis'];
// $menu
$menu = $_POST['menuvis'];
$sql = "INSERT INTO `posts` (`POST_ID`, `POST_TITLE`, `POST_DATE`, `POST_USER`, `POST_BODY`, `POST_VIS`, `POST_EXTRA`, `POST_SLUG`) VALUES (NULL, \"$title\", \"$date\", \"$user\", \"$content\", \"$vis\", \"$menu\", \"$slug\");";
if (!mysql_query($sql,$con)) {
		die('Code Syntax Error: ' . mysql_error());
	} else {
		//header("Location: page.php?post=". mysql_insert_id());
		header("Location: index.php");
	}
exit;
?>