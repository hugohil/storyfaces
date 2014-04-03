<?php include('header.php'); ?>
		<div class="wrapper index">
			<div class="faces content">
				<canvas id="cvs" width='300' height='300'>
				</canvas>
				<button id="btn">Lire son histoire</button>
			</div>
			<div class="stories content">
				<h1 id='name'></h1>
				<p id="story"></p>
			</div>
		</div>
		<section class="info">
			<p>Storyfaces est un site participatif qui associe des visages générés aléatoirement avec des histoires proposées par des visiteurs. Vous voulez écrire une courte histoire ? <a href="./participer">Proposez la ici !</a></p>
		</section>
		<script type="text/javascript" src="js/paper.js"></script>
		<script type="text/paperscript" src="js/faces.js" canvas="cvs"></script>
<?php include 'footer.php'; ?>