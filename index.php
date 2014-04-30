<!doctype html>
<html>
<head>
<title>PolyBox Blog</title>
<meta name="description" content="Welcome to PolyBox Blog, this is the description that search engines will use for your website.">
<meta http-equiv="content-type" content="text/html;charset=UTF-8">
<link rel="stylesheet" href="/page.css">
<link rel="stylesheet" href="/fb/jquery.fancybox.css">
<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.4/jquery.min.js"></script>
<script type="text/javascript" src="/fb/jquery.fancybox.pack.js"></script>
<script>
$(document).ready(function() {
	$("a.pbimg").fancybox();
});
</script>
</head>

<body>
<div class="head">
<div class="h960">
<div class="social" id="fb"><a href="http://facebook.com/"></a></div>
<div class="logo"></div>
<div class="nav">
<ul>
<li><a href="#">Home</a></li>
<li><a href="#">Sample Link</a></li>
<li><a href="#">Sample Link</a></li>
<li><a href="#">Sample Link</a></li>
</ul>
</div>
</div>
</div>
<div class="cover"></div>
<div class="c960">
<div class="left">
<?php
include("admin/connection.php");
$sql = "SELECT * FROM `posts` WHERE POST_VIS=1";
$esql = mysql_query( $sql, $con );
if(! $esql ) {
  die('Could not get data: ' . mysql_error());
}
$total = mysql_num_rows($esql);
$last = 0;
$first = 1;
$perpage = 5;
$pages = ceil($total / $perpage);
if (!(isset($_GET['page']))) {
	$currentpage=1;
} else {
	$currentpage = $_GET['page'];
}
if ($currentpage < 1) {
	$currentpage = 1;
}
if (!($currentpage == 1)) {
	$first = 0;
}
if ($currentpage > $pages) {
	$currentpage = $pages;
}
if (($currentpage + 1) > $pages) {
	$last = 1;
}
echo "<!-- $pages pages with $perpage on each -->";
$next = $currentpage + 1;
$prev = $currentpage - 1;
$limits = ($currentpage - 1) * $perpage;
$limits = "$limits, $perpage";
$sql = "SELECT * FROM `posts` WHERE POST_VIS=1 ORDER BY `POST_ID` DESC LIMIT $limits";
$result = mysql_query( $sql, $con );
if(! $result )
{
  die('Could not get data: ' . mysql_error());
}
while($row = mysql_fetch_array($result))
{
?>
<div class="post">
<?php echo $row['POST_BODY']; ?>
<div class="details"><?php echo $row['POST_DATE']; ?><a href="/<?php echo $row['POST_SLUG']; ?>">View Comments</a></div>
</div>
<?php
}
mysql_close($con);
?>
</div>
<div class="right">
<?php
include("admin/connection.php");
$edsql = "SELECT * FROM `dribbble` WHERE DRIB_OTW=1 LIMIT 1";
$dsql = mysql_query( $edsql, $con );
if(! $dsql )
{
  die('Could not get data: ' . mysql_error());
}
while($drow = mysql_fetch_array($dsql))
{
	$dtitle = $drow['DRIB_TITLE'];
	$dimg = $drow['DRIB_IMG'];
	$durl = $drow['DRIB_URL'];
}
mysql_close($con);
?>
<h3>Dribbble of the Week</h3>
<a href="<?php echo $durl; ?>" title="<?php echo $dtitle; ?>"><img src="<?php echo $dimg; ?>"></a>
<h3>Sponsored</h3>
<div class="ad"></div>
<h3>Partners</h3>
<a href="#" title="Sample Partner"><div class="partner"></div></a>
</div>
<div class="controls clearfix"><?php if ($last == 0) { ?><a title="Older Posts" href="/page/<?php echo $next; ?>"><div class="btn">&lt;</div></a><?php } ?><?php if ($first == 0) { ?><a class="rgt" title="Newer Posts" href="/page/<?php echo $prev; ?>"><div class="btn">&gt;</div></a><?php } ?></div>
</div>
<div class="footer">
<div class="f960">
<h2>PolyBox Blog</h2>
<p>This is a default PolyBox Installation. When configured, a user description will appear here.</p>
</div>
</div>
</body>
</html>