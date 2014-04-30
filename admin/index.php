<?php
if (!($_COOKIE['siteauth']=="666")) {
	header("Location: ../404");
}
?>
<!doctype html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>PolyBox Admin</title>
<link rel="stylesheet" href="admin.css">
</head>

<body>
<div class="nav">
<ul>
	<li><a href="#">Manage Posts</a></li>
    <li><a href="create.php">Create Post</a></li>
    <li><a href="upload.php" onclick="javascript:void window.open('upload.php','1391990565997','width=500,height=20,toolbar=0,menubar=0,location=0,status=0,scrollbars=0,resizable=0,left=0,top=0');return false;">Upload Images</a></li>
    <li><a href="options.php">Options</a></li>
    <li class="right"><a href="#">Logout</a></li>
</ul>
</div>
<table class="posts">
<tr><th>Post Title</th><th>Author</th><th>Date</th></tr>
<?php
include("connection.php");
$sql = "SELECT * FROM `posts`";
$esql = mysql_query( $sql, $con );
if(! $esql )
{
  die('Could not get data: ' . mysql_error());
}
while($row = mysql_fetch_array($esql))
{
?>
<tr><td><a href="/page.php?id=<?php echo $row['POST_ID']; ?>"><?php echo $row['POST_TITLE']; ?></a><br><span class="controls"><a href="edit.php?post=<?php echo $row['POST_ID']; ?>">Edit Post</a> | <a href="delete.php?post=<?php echo $row['POST_ID']; ?>">Delete Post</a></span></td><td><?php echo $row['POST_USER']; ?></td><td><?php echo $row['POST_DATE']; ?><br>Published</td></tr>
<?php
}
mysql_close($con);
?>
</table>
</body>
</html>
