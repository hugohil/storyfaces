<?php 
	if(isset($_POST['story']) && isset($_POST['genre']) && $_POST['story'] != '' && strlen($_POST['story']) < 1000 ){
		include 'config.php';
		$req = $bdd->prepare('INSERT INTO storyfaces(id,content,genre,published) VALUES(:id,:content,:genre,:published)');
		$req->execute(array(
			'id' => '',
			'content' => $_POST['story'],
			'genre' => $_POST['genre'],
			'published' => 0
			));
	}
	$host = $_SERVER['HTTP_HOST'];
	$uri = dirname($_SERVER['PHP_SELF']);
	header('location: http://'.$host.$uri.'/index');
	exit;