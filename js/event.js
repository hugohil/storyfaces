$('#new-story,#refresh').click(function(){
	getStory();
});

$('#about').click(function(){
	$("#more-infos").clearQueue().slideToggle();
});