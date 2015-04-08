define(function(require, exports, module){

	require('jquery');
	require('modules/login');
	require('handlebars');

	var studyLis = require('tpl/studyLis');
	var noteLis = require('tpl/noteLis');
	var refreshContent = function(content, tpl, data) {
		content.html(Handlebars.compile(tpl)(data));
	}
	
	$.post('inter/getTop5New.php', '', function(data) {
		data = JSON.parse(data);
		refreshContent($('#study_content'), studyLis, data.study);
		refreshContent($('#note_content'), noteLis, data.note);
	});
	
});