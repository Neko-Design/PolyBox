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
<form action="submit.php" method="post" class="editpage">
<h1>New Page</h1>
<input type="hidden" name="post_user" value="Administrator">
<input type="text" style="margin-bottom: 10px;" class="ptitle" name="post_title" placeholder="Page Title">
<textarea  style="margin-bottom: 10px;" id="editor" class="pbody" name="post_content" placeholder="Enter some content..."></textarea>
<div class="options">
<label style="margin-left: 10px;" for="menuvis">Publish Post <input value="1" class="check" id="menuvis" type="checkbox" name="vis"></label>
<input type="hidden" class="ptitle" name="tags" value="" placeholder="Enter some tags">
<input type="button" class="btn" value="Cancel" onClick="window.location = 'index.php'"><input type="submit" value="Publish" class="btn"><div class="clearfix"></div></div>
</form>
<script>
CKEDITOR.replace( 'editor', {
    toolbar: 'Basic',
	height: '500px',
	bodyClass: 'post'
});
</script>
</body>
</html>