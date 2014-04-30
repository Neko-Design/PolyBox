<?php
$ep = 0;
$slug = $_GET['slug'];
if ($slug == '') {
	header("Location: index.php");
}
include("polybox.php");
include("admin/connection.php");
$sql = "SELECT * FROM `posts` WHERE (POST_SLUG='$slug') LIMIT 1";
$esql = mysql_query( $sql, $con );
if(! $esql )
{
  die('Could not get data: ' . mysql_error(). "Requested page ".$slug);
}
if (mysql_num_rows($esql) == 0) {
	$pid = "404";
	$sql = "SELECT * FROM `posts` WHERE POST_ID=$pid LIMIT 1";
	$esql = mysql_query( $sql, $con );
	$ep = 1;
}
if ($slug == '404') {
	header("HTTP/1.0 404 Not Found");
	$ep = 1;
}
while($row = mysql_fetch_array($esql))
{
	$title = $row['POST_TITLE'];
	$body = $row['POST_BODY'];
	$pid = $row['POST_ID'];
	$pdate = $row['POST_DATE'];
}
mysql_close($con);
$comments_enabled = 0;
?>
<!doctype html>
<html>
<head>
<title>PolyBox Blog - <?php echo $title; ?></title>
<meta name="description" content="PolyBox blog presents a page about <?php echo $title; ?>, Enjoy!">
<meta http-equiv="content-type" content="text/html;charset=UTF-8">
<link rel="stylesheet" href="/page.css">
</head>

<body>
<div class="head">
<div class="h960">
<div class="social" id="fb"><a href="http://facebook.com/"></a></div>
<div class="logo"></div>
<div class="nav">
<ul>
<li><a href="/">Home</a></li>
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
<div class="post">
<?php polybox($body);?>
<?php if (!($ep == 1)) { ?><div class="details"><?php echo $pdate; ?></div><?php } ?>
</div>
<?php if (!($ep == 1 && $comments_enabled == 1)) { ?><div class="comments">
    <div id="disqus_thread"></div>
    <script type="text/javascript">
        /* * * CONFIGURATION VARIABLES: EDIT BEFORE PASTING INTO YOUR WEBPAGE * * */
        var disqus_shortname = 'example';
		var disqus_identifier = '<?php echo $pid; ?>';
    	var disqus_title = '<?php echo $title; ?>';

        /* * * DON'T EDIT BELOW THIS LINE * * */
        (function() {
            var dsq = document.createElement('script'); dsq.type = 'text/javascript'; dsq.async = true;
            dsq.src = '//' + disqus_shortname + '.disqus.com/embed.js';
            (document.getElementsByTagName('head')[0] || document.getElementsByTagName('body')[0]).appendChild(dsq);
        })();
    </script>
    <noscript>Please enable JavaScript to view the <a href="http://disqus.com/?ref_noscript">comments powered by Disqus.</a></noscript>
    <a href="http://disqus.com" class="dsq-brlink">comments powered by <span class="logo-disqus">Disqus</span></a>
</div>
<?php } ?>
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
<div class="controls clearfix"></div>
</div>
<div class="footer">
<div class="f960">
<h2>PolyBox Blog</h2>
<p>This is a default PolyBox Installation. When configured, a user description will appear here.</p>
</div>
</div>
</body>
</html>