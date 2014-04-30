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
<script src="ckeditor/ckeditor.js"></script>
</head>
<?php
$x = $_GET['post'];
include("connection.php");
include("pages.php");
?>
<body>
<div class="nav">
<ul>
	<li><a href="index.php">Manage Posts</a></li>
    <li><a href="#">Create Post</a></li>
    <li><a href="upload.php" onclick="javascript:void window.open('upload.php','1391990565997','width=500,height=20,toolbar=0,menubar=0,location=0,status=0,scrollbars=0,resizable=0,left=0,top=0');return false;">Upload Images</a></li>
    <li><a href="options.php">Options</a></li>
    <li class="right"><a href="#">Logout</a></li>
</ul>
</div>
<form action="update.php" method="post" class="editpage">
<h1>Edit Page</h1>
<?php
	$result = mysql_query("SELECT * FROM posts WHERE `POST_ID` = '$x' LIMIT 1") 
                or die(mysql_error());
		$num_results = mysql_num_rows($result); 
	   if ($num_results == 0 ) { 
       echo "<script>window.location = 'test.php'</script>";
	   exit;
       }
	while($row = mysql_fetch_array( $result )) {
?>
<input type="hidden" name="id" value="<?php echo $x; ?>">
<input type="text" class="ptitle" name="title" value="<?php echo $row['POST_TITLE']; ?>">
<h4>Posted by <?php echo $row['POST_USER']; ?> on <?php echo $row['POST_DATE']; ?></h4>
<textarea id="editor" class="pbody" name="body"><?php echo $row['POST_BODY']; ?></textarea>
<input type="button" class="cancelbtn" value="Cancel" onClick="window.location = 'post.php?post=<?php echo $x; ?>'">
<label for="postvis">Publish Post <input value="1" class="check" id="postvis" type="checkbox" name="vis" <?php checked($row['POST_VIS']); ?>></label>
<input type="submit" value="Update" class="submitbtn">
</form>
<?php
	}
?>
<script>
CKEDITOR.replace( 'editor', {
    toolbar: 'Basic',
	height: '500px',
	bodyClass: 'post'
});
</script>
</body>
</html>