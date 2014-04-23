var nameFiles = ['wom','men'];

function getData(file, random, type){
	var data;
    var req = $.ajax({
        type: "GET",
        dataType: type,
        url: file,
        async: false
    }).done(function(content) {
    	if(random){
			var re = /\s*,\s*/;
			var datas = content.split(re);
			var r = Math.floor(Math.random()*datas.length);
			data = datas[r];
    	} else {
    		data = content;
    	}
	});
	return data;
}

// rajouter un fade in/out sur le bloc
function getStory(){
	face.draw();
	var content = getData('secret.php', false, 'json');
	var story = content.content;
	var genre = content.genre;
	var date = content.date;
	if(genre != 'men' || genre != 'wom') {
		var r = Math.floor(Math.random()*2);
		genre = nameFiles[r];
	}
	var file = 'datas/'+genre+'.txt';
	var name = getData(file, true, 'text');
	document.getElementById('name').innerHTML = name;
	document.getElementById('date').innerHTML = date;
	document.getElementById('story').innerHTML = story;
}

/* 
* face n'est pas chargée au document.ready
* click trigger que quand la souris bouge
*/
