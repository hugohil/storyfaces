<?php include('header.php'); ?>
		<div class="wrapper index">
			<div class="content">
				<div class="status">
					<div class="face-header">
						<canvas id="cvs" width='100' height='100'>
						</canvas>
						<h1 id='name'></h1>
					</div>
					<p id="story"></p>
				</div>
				<div class="button-area">
					<a href="./participer">écrivez votre histoire</a>
					<button id="new-story">Nouvelle histoire</button>
				</div>
			</div>
		</div>
		<script type="text/javascript" src="js/paper.js"></script>
		<script type="text/paperscript" src="js/faces.js" canvas="cvs"></script>
		<script type="text/javascript" src="js/function.js" canvas="cvs"></script>
<?php include 'footer.php'; ?>