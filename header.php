<!DOCTYPE html>
<html>
<head>
	<meta charset='UTF-8'>
	<title>Storyfaces</title>
	<link rel="icon" href="./favicon.ico" />
	<link href='http://fonts.googleapis.com/css?family=Ubuntu:400,300,300italic,500,400italic,500italic,700,700italic' rel='stylesheet' type='text/css'>
	<link href='http://fonts.googleapis.com/css?family=Shadows+Into+Light' rel='stylesheet' type='text/css'>
	<?php if($_SERVER['SERVER_ADDR'] !== '127.0.0.1'){ ?>
			<link rel="stylesheet" type="text/css" href="css/style.min.css">
	<?php } else { ?>
			<link rel="stylesheet" type="text/css" href="css/style.css">
	<?php } ?>
	<script src="http://code.jquery.com/jquery-1.11.0.min.js"></script>
	<?php if($_SERVER['PHP_SELF'] == '/www-dev/everyfaces/index.php'){ ?>
			<script type="text/javascript" src="js/paper.js"></script>
			<script type="text/paperscript" src="js/faces.js" canvas="cvs"></script>
	<?php } ?>
</head>
<body>
	<header class="site-header">
		<a href="index"><h1>Storyfaces</h1></a>
	</header>
	<div class="site-container">