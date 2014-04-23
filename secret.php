<?php
	include 'config.php';
	// header('Content-Type: application/JSON');

	$req = $bdd->query('SELECT id FROM storyfaces WHERE published = \'1\'');
	$all = $req->fetchAll();

	$r = rand(0,sizeof($all)-1);
	$id = $all[$r];

	$story_req = $bdd->query('SELECT content,genre,postdate FROM storyfaces WHERE id ='.$id['id']);
	$story = $story_req->fetch();
	
	$content = htmlspecialchars($story['content']);
	$content = str_replace(',', '&#44;', $content);
	$genre = htmlspecialchars($story['genre']);
	$date = htmlspecialchars($story['postdate']);

	$json['content'] = $content;
	$json['genre'] = $genre;
	$json['date'] = $date;
	
	echo json_encode($json);
