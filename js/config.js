(function(){

	var OXNOTE = 'http://localhost/oxnote';

	seajs.config({
	
		base: OXNOTE + '/js',
		alias: {
			'jquery': 'lib/jquery.min.js',
			'handlebars': 'lib/handlebars.js',
			'pagination': 'lib/pagination.js'
		}
	
	});
	
}());
