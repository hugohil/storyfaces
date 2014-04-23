<?php 
	if(isset($_POST['story']) && isset($_POST['genre']) && $_POST['story'] != '' && strlen($_POST['story']) < 1000 ){
		include 'config.php';
		$req = $bdd->prepare('INSERT INTO storyfaces(id,content,genre,postdate,published) VALUES(:id,:content,:genre,:postdate,:published)');
		$req->execute(array(
			'id' => '',
			'content' => $_POST['story'],
			'genre' => $_POST['genre'],
			'postdate' => $_POST['postdate'],
			'published' => 0
			));
	}
	$host = $_SERVER['HTTP_HOST'];
	$uri = dirname($_SERVER['PHP_SELF']);
	header('location: http://'.$host.$uri.'/index');
	exit;