<!DOCTYPE html>
<html>
<head>
	<meta charset='UTF-8'>
	<title>Storyfaces</title>
	<link rel="icon" href="./favicon.ico" />
	<link href="//netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css" rel="stylesheet">
	<?php if($_SERVER['SERVER_ADDR'] !== '127.0.0.1'){ ?>
			<link rel="stylesheet" type="text/css" href="css/style.min.css">
	<?php } else { ?>
			<link rel="stylesheet" type="text/css" href="css/style.css">
	<?php } ?>
	<script src="http://code.jquery.com/jquery-1.11.0.min.js"></script>
</head>
<body>
	<header class="site-header">
		<div class="wrapper">
			<h1><a href="/">Storyfaces</a></h1>
			<ul class="menu">
				<?php if($_SERVER['PHP_SELF'] == '/dev/everyfaces/index.php') { ?>
					<li class="fa fa-refresh" id="refresh"></li>
				<?php } else { ?>
					<li><a href="/" class="fa fa-refresh"></a></li>
				<?php } ?>
				<li><a href="/participer" class="fa fa-plus"></a></li>
				<li class="fa fa-question" id="about"></li>
			</ul>
		</div>
	</header>
	<div class="site-container">