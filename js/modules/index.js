define(function(require, exports, module){

	require('jquery');
	require('handlebars');

	var noteLis = require('tpl/noteLis');
	var refreshContent = function(content, data) {
		content.html(Handlebars.compile(noteLis)(data));
	}
	
	$.post('inter/getTop5New.php', '', function(data) {
		data = JSON.parse(data);
		refreshContent($('#study_content'), data.study);
		refreshContent($('#note_content'), data.note);
	});
	
});