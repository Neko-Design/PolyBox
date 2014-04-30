<?php
setcookie("siteauth", "666", time()+24000, "/");
header("Location: /admin");
?>