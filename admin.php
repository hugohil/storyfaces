<?php 
	include 'config.php';

	if(isset($_POST['content']) && isset($_POST['genre']) && isset($_POST['id']) ){
		if(isset($_POST['publier'])){
			$update = $bdd->prepare('UPDATE storyfaces SET published = :state WHERE id = :id');
			$update->execute(array(
				'state' => 1,
				'id' => $_POST['id']
				));
		} else if(isset($_POST['supprimer'])) {
			$bdd->query('DELETE FROM storyfaces WHERE id = '.$_POST['id']);
		}
		$host = $_SERVER['HTTP_HOST'];
		$uri = $_SERVER['PHP_SELF'];
		header('location: http://'.$host.$uri);
	}

	$req = $bdd->query('SELECT * FROM storyfaces WHERE published=\'0\'') or die(print_r($bdd->errorInfo()));
 ?>
<html>
<head>
	<?php if($_SERVER['SERVER_ADDR'] !== '127.0.0.1'){
			?><link rel="stylesheet" type="text/css" href="css/style.min.css"><?php
		} else {
			?><link rel="stylesheet" type="text/css" href="css/style.css"><?php
		}?>
	<meta charset='utf-8'>
	<title>Storyfaces - Admin</title>
</head>
<body>
	<div>
	 	<h2 class="admin-sep">Histoires à valider :</h2>
	 </div>
	<?php 
		while ($datas = $req->fetch()) {
			?>
			<form method='post' action='admin.php' class="admin-story">
				<input type='text' name='genre' value='<?php echo htmlspecialchars($datas['genre']); ?>'>
				<input type='text' name='postdate' value='<?php echo htmlspecialchars($datas['postdate']); ?>'>
				<textarea name='content'><?php echo htmlspecialchars($datas['content']); ?></textarea>
				<input type='hidden' name='id' value='<?php echo htmlspecialchars($datas['id']); ?>'>
				<input type='submit' name='publier' value='publier'>
				<input type='submit' name='supprimer' value='supprimer'>
			</form>
			<?php
		}
		$req->closeCursor();
	 ?>
	 <div>
	 	<h2 class="admin-sep">Histoires déjà postées :</h2>
	 </div>
	 <?php 
		$req = $bdd->query('SELECT * FROM storyfaces WHERE published=\'1\'') or die(print_r($bdd->errorInfo()));
		while ($datas = $req->fetch()) {
			?>
			<form method='post' action='admin.php' class="admin-story">
				<input type='text' name='genre' value='<?php echo htmlspecialchars($datas['genre']); ?>'>
				<input type='text' name='postdate' value='<?php echo htmlspecialchars($datas['postdate']); ?>'>
				<textarea name='content'><?php echo htmlspecialchars($datas['content']); ?></textarea>
				<input type='hidden' name='id' value='<?php echo htmlspecialchars($datas['id']); ?>'>
				<input type='submit' name='supprimer' value='supprimer'>
			</form>
			<?php
		}
		$req->closeCursor();
	 ?>
</body>
</html>