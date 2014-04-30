<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Upload Images</title>
<link href="admin.css" rel="stylesheet" type="text/css">
</head>

<body class="fupload">
<form action="upload_img.php" method="post" enctype="multipart/form-data">
	<input type="file" id="file" name="files[]" multiple="multiple" />
	<input type="submit" value="Upload Images" />
</form>
</body>
</html>