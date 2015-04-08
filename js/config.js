(function(){

	var OXNOTE = 'http://www.calfnote.com';

	seajs.config({
	
		base: OXNOTE + '/js',
		alias: {
			'jquery': 'lib/jquery.min.js',
			'handlebars': 'lib/handlebars.js',
			'pagination': 'lib/pagination.js',
			'ajaxfileupload': 'lib/jquery.ajaxfileupload.js',
			'serializejson': 'lib/jquery.serializeJson.js'
		}
	
	});
	
}());
