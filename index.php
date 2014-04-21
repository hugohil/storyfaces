<?php include('header.php'); ?>
		<div class="wrapper index">
			<div class="content">
				<div class="status">
					<div class="face-header">
						<canvas id="cvs" width='50' height='50'>
						</canvas>
						<h1 id='name'></h1>
					</div>
					<p id="story"></p>
				</div>
				<div class="button-area">
					<button id="new-story">Nouvelle histoire</button>
				</div>
			</div>
			<section class="info">
				<p>Storyfaces est un site participatif qui associe des visages générés aléatoirement avec des histoires proposées par des visiteurs. Vous voulez écrire une courte histoire ? <a href="./participer">Proposez la ici !</a></p>
			</section>
		</div>
		<script type="text/javascript" src="js/paper.js"></script>
		<script type="text/paperscript" src="js/faces.js" canvas="cvs"></script>
		<script type="text/javascript" src="js/function.js" canvas="cvs"></script>
<?php include 'footer.php'; ?>