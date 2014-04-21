<!DOCTYPE html>
<html>
<head>
	<meta charset='UTF-8'>
	<title>Storyfaces</title>
	<link rel="icon" href="./favicon.ico" />
	<?php if($_SERVER['SERVER_ADDR'] !== '127.0.0.1'){ ?>
			<link rel="stylesheet" type="text/css" href="css/style.min.css">
	<?php } else { ?>
			<link rel="stylesheet" type="text/css" href="css/style.css">
	<?php } ?>
	<script src="http://code.jquery.com/jquery-1.11.0.min.js"></script>
</head>
<body>
	<header class="site-header">
		<a href="/index"><h1>Storyfaces</h1></a>
	</header>
	<div class="site-container">