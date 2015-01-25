define(function(require, exports, module){

	require('jquery');
	require('modules/login');
	require('handlebars');
	require('pagination');

	var studyTpl = require('tpl/oneStudy');
	
	var refreshStudies = function(toPage) {
		
		$.post('inter/study/getStudyList.php', {curPage : toPage}, function(data){
			data = JSON.parse(data);
			$('#studies').html(Handlebars.compile(studyTpl)(data.studyList));
			var pagination = $.pagination({
				toPage : parseInt(data.curPage),
				totalPage : parseInt(data.totalPage)
			});
			$('#userPagination').html(pagination);
		});
		
	}
	
	refreshStudies(1);
	
});