var nameFiles = ['wom','men'];

function getData(file, random){
	var data;
    var req = $.ajax({
        type: "GET",
        url: file,
        async: false
    }).done(function(content) {
		var re = /\s*,\s*/;
		var datas = content.split(re);
    	if(random){
			var r = Math.floor(Math.random()*datas.length);
			data = datas[r];
    	} else {
    		data = datas;
    	}
	});
	return data;
}

// rajouter un fade in/out sur le bloc
function getStory(){
	face.draw();
	var content = getData('secret.php', false);
	var story = content[0];
	var genre = content[1];
	if(genre != 'men' || genre != 'wom') {
		var r = Math.floor(Math.random()*2);
		genre = nameFiles[r];
	}
	var file = 'datas/'+genre+'.txt';
	var name = getData(file,true);
	document.getElementById('name').innerHTML = name;
	document.getElementById('story').innerHTML = story;
}

/* 
* face n'est pas chargée au document.ready
* click trigger que quand la souris bouge
*/
