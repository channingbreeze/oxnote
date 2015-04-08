module.exports = function(grunt){

    // 项目配置
    grunt.initConfig({
        pkg: grunt.file.readJSON('package.json'),
		banner: '/*build <%= pkg.name %> at <%= grunt.template.today("yyyy-mm-dd HH:MM:ss") %> */\n',
		watch: {
			less: {
				files: ['less/*.less'],
				tasks: ['build-css'],
				options: {
					debounceDelay: 250
				}
			},
			template: {
				files:['tpl/*.html'],
				tasks: ['build-tpl']
			}
		},
		recess: {
			options: {
				compile: true,
				banner: '<%= banner %>'
			},
			css: {
				src: ['less/<%= pkg.name %>.less'],
				dest: 'css/<%= pkg.name %>.css'
			}
		}
    });

    // 加载插件
	grunt.loadNpmTasks('grunt-recess');
	grunt.loadNpmTasks('grunt-contrib-watch');

    // 配置任务
    grunt.registerTask('default', ['build-tpl', 'build-css']);
	grunt.registerTask('build-watch', ['watch']);
	grunt.registerTask('build-css', ['recess']);
	grunt.registerTask('build-tpl', function() {
		var fs = require('fs'),
			pkg = grunt.file.readJSON('package.json'),
			mode_name = pkg.name,
			files = {};
		function getFiles(file, type) {
			fs.readdirSync(file)
			.filter(function (path) {
				if(path.indexOf(".") < 0) {
					getFiles(file + "/" + path, type);
				}
				return new RegExp('\\.' + type + '$').test(path);
			})
			.forEach(function (path) {
				var file_name = path.replace(".html" ,""),
					file_content = fs.readFileSync(file + '/' + path, 'utf8'),
					file_ = {};
				file_[file_name] = file_content;
				var fileString = JSON.stringify(file_).replace(/(\\f|\\n|\\r|\\t|\\v)+/g, "");
				fileString = "define(function(){ var tpl=" + fileString + "; return tpl['" + file_name + "'];});";
				fs.writeFileSync("js/tpl/" + file_name + '.js', fileString);
			});
		}
		getFiles("tpl", "html");
	});
	
}
