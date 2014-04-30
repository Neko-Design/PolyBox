<?php
if (!($_COOKIE['siteauth']=="666")) {
	header("Location: ../404");
}
include("connection.php");
/* Page update script - fuck off */
$table = 'posts';
$pid = $_POST['id'];
$ptitle = mysql_real_escape_string($_POST['title']);
$pbody = mysql_real_escape_string($_POST['body']);
$vis = $_POST['vis'];
//$tags = $_POST['tags'];
	mysql_query("UPDATE posts SET POST_TITLE=\"$ptitle\", POST_BODY=\"$pbody\", POST_VIS=\"$vis\" WHERE POST_ID=\"$pid\"") 
                or die(mysql_error());
mysql_close($con);
header("Location: edit.php?post=$pid");
?>