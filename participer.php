<?php include 'header.php'; ?>
	<div class="wrapper particip">
		<div class='info particip-infos content'>
			<h2>Ecrivez ici votre histoire !</h2>
			<p>Avant de commencer, quelques précisions :</p>
			<ul>
				<li>Votre histoire ne doit pas dépasser 1000 caractères et ne doit pas comporter le prénom du personnage, puisqu'il sera tiré au hasard.</li>
				<li>Vous êtes libre d'écrire ce qui vous passe par la tête, que ce soit votre dernier trajet en transports ou la quête épique d'un anneau magique très puissant. Sachez tout de même que je modère les histoires.</li>
				<li>Sachez enfin que tout ceci est entièrement anonyme.</p></li>
			</ul>
		</div>
		<form method='post' action='validation.php' id='story-form' class='content'>
			<div class="button-area border-down">
				<label>Votre personnage est : </label>
				<select name="genre" id="genre">
					<option selected='true' value=''>peu importe</option>
					<option value='wom'>une femme</option>
					<option value='men'>un homme</option>
				</select>
			</div>
			<div class="text-area-ctn">
				<textarea name='story' id='story-area' autofocus='true' spellcheck='true'></textarea>
			</div>
			<div class="button-area">
				<input type='submit' id="submit" value='Envoyer'>
				<span id="count"></span>
			</div>
		</form>
		<p class="notice"></p>
	</div>
	<script type="text/javascript">
		jQuery(function($){
			// localStorage
			if(!localStorage) {
				return false;
			}
			if(localStorage['content']){
				$('#story-area').val(localStorage['content']);
				$('#genre option').each(function(){
					if($(this).attr('value') == localStorage['genre']){
						$('#genre option:selected').attr('selected',false);
						$(this).attr('selected',true);
					}
				})
			} else {
				var story = $('#story-area').val();
				localStorage.setItem('content',story);
			}

			$('#count').text(localStorage['content'].length+'/1000');

			$('#story-area').keyup(function(e){
				story = $(this).val();
				localStorage.setItem('content',story);
				$('#count').text(localStorage['content'].length+'/1000');
			})
			
			$('#genre').change(function(){
				var selected = $('#genre option:selected').attr('value');
				localStorage.setItem('genre',selected);
			})

			// prevent default
			$('#story-form').submit(function(event){
				if($('#story-area').val() == '') {
					event.preventDefault();
				} else if($('#story-area').val().length > 1000) {
					$('p.notice').addClass('error').text('Le texte ne peux pas faire plus de 1000 caractère !');
					event.preventDefault();
				} else {
					localStorage.clear();
					return;
				}
			})

		});
	</script>
<?php include 'footer.php'; ?>