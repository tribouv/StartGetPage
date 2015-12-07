<?php
include __DIR__."/php/start.php";
//include __DIR__."/config/bdd.php";
include __DIR__."/include/function.php";
include __DIR__."/BOM";
ini_set('display_errors', 1);
?>
<!doctype html>
<html lang="en">
<head>
    <meta name="author" content="vincent tribouillois">
    <?php include __DIR__."/include/head.php"; ?>
</head>
<body>
<header>
    <?php include __DIR__."/include/header.php"; ?>
</header>

<div id="page">
    <div class="clearfix"></div>
    <?php include $page ?>
</div>
<footer>
    <?php include __DIR__."/include/footer.php"; ?>
</footer>
</body>
</html>	