define(function(require, exports, module){

	require('jquery');
	require('pagination');
	require('handlebars');
	
	require('modules/login');
	
	Dialog = require('modules/dialog').Dialog;
	
	var studyDialog = new Dialog();
	var noteDialog = new Dialog();
	
	Handlebars.registerHelper("equals", function(v1, v2, options) {
		if(v1 == v2) {
			return options.fn(this);
		} else {
			return options.inverse(this);
		}
	});
	
	//-----------------user manage-------------------
	
	var userTable = require('tpl/userTable');
	
	var refreshUser = function(toPage) {
		
		$.post('inter/admin/getUserList.php', {curPage : toPage, username : $('#userNameQuery').val()}, function(data) {
			data = JSON.parse(data);
			$('#userTable').html(Handlebars.compile(userTable)(data.userList));
			$('#operator').find('a').on('click', function(e) {
				$this = $(this);
				var target = 0;
				if($this.html() == "取消管理员") {
					target = 0;
				} else if($this.html() == '设为管理员') {
					target = 1;
				}
				$.post('inter/admin/setOrCancelAdmin.php', {target : target, id : $this.data('id')}, function(data) {
					if(data == "true") {
						window.location.reload();
					} else {
						window.alert('操作失败');
					}
				});
			});
			var pagination = $.pagination({
				toPage : parseInt(data.curPage),
				totalPage : parseInt(data.totalPage)
			});
			$('#userPagination').html(pagination);
			$('#userPagination').find('a').on('click', function(e){
				e.preventDefault();
				refreshUser($(this).data('to'));
			});
		});
		
	};
	
	$('#userQueryBtn').on('click', function(e) {
		refreshUser(1);
	});
	
	$('#userManage').on('click', function(e) {
		
		refreshUser(1);
		
		$('.manage').css('display', 'none');
		$('#userManageDiv').css('display', 'block');
		
	});
	
	$('#userManage').trigger('click');
	
	//-----------------user manage-------------------
	
	//-----------------study manage-------------------
	
	var studyTable = require('tpl/studyTable');
	
	var refreshStudy = function(toPage) {
		
		$.post('inter/admin/getStudyList.php', {curPage : toPage}, function(data) {
			data = JSON.parse(data);
			$('#studyTable').html(Handlebars.compile(studyTable)(data.studyList));
			$('#studyTable').find('a').on('click', function(e) {
				e.preventDefault();
				$this = $(this);
				studyDialog.show({
					title : '修改学习',
					content : require('tpl/dialogStudy'),
					okText : '修改',
					onShowDone : function() {
						$('#tag').val($this.data('tag'));
						$('#title').val($this.data('title'));
						$('#subTitle').val($this.data('sub'));
						$('#docDir').val($this.data('doc'));
					},
					onOk : function() {
						$.post('inter/admin/updateStudy.php', 'id=' + $this.data('id') + '&' + $('#studyForm').serialize(), function(data){
							if(data === "true") {
								studyDialog.close();
								refreshStudy(1);
							} else {
								window.alert("修改失败");
							}
						});
					}
				});
			});
			var pagination = $.pagination({
				toPage : parseInt(data.curPage),
				totalPage : parseInt(data.totalPage)
			});
			$('#studyPagination').html(pagination);
			$('#studyPagination').find('a').on('click', function(e){
				e.preventDefault();
				refreshStudy($(this).data('to'));
			});
		});
		
	};
	
	$('#studyManage').on('click', function(e) {
		
		refreshStudy(1);
		
		$('.manage').css('display', 'none');
		$('#studyManageDiv').css('display', 'block');
		
	});
	
	$('#addStudy').on('click', function(){
		
		studyDialog.show({
			title : '新增学习',
			content : require('tpl/dialogStudy'),
			okText : '添加',
			onOk : function() {
				$.post('inter/admin/addStudy.php', $('#studyForm').serialize(), function(data){
					if(data === "true") {
						studyDialog.close();
						refreshStudy(1);
					} else {
						window.alert("添加失败");
					}
				});
			}
		});
		
	});
	
	//-----------------study manage-------------------
	
	//-----------------note manage-------------------
	
	var noteTable = require('tpl/noteTable');
	
	var refreshNote = function(toPage) {
		
		$.post('inter/admin/getNoteList.php', {curPage : toPage}, function(data) {
			data = JSON.parse(data);
			$('#noteTable').html(Handlebars.compile(noteTable)(data.noteList));
			$('#noteTable').find('a').on('click', function(e) {
				e.preventDefault();
				$this = $(this);
				noteDialog.show({
					title : '修改笔记',
					content : require('tpl/dialogNote'),
					onShowDone : function() {
						$('#category').val($this.data('category'));
						$('#ord').val($this.data('ord'));
						$('#pri').val($this.data('pri'));
						$('#title').val($this.data('title'));
						$('#subTitle').val($this.data('sub'));
						$('#docDir').val($this.data('doc'));
					},
					okText : '修改',
					onOk : function() {
						$.post('inter/admin/updateNote.php', 'id=' + $this.data('id') + '&' + $('#noteForm').serialize(), function(data){
							if(data === "true") {
								noteDialog.close();
								refreshNote(1);
							} else {
								window.alert("修改失败");
							}
						});
					}
				});
			});
			var pagination = $.pagination({
				toPage : parseInt(data.curPage),
				totalPage : parseInt(data.totalPage)
			});
			$('#notePagination').html(pagination);
			$('#notePagination').find('a').on('click', function(e){
				e.preventDefault();
				refreshNote($(this).data('to'));
			});
		});
		
	};
	
	$('#noteManage').on('click', function(e) {
		
		refreshNote(1);
		
		$('.manage').css('display', 'none');
		$('#noteManageDiv').css('display', 'block');
		
	});
	
	$('#addNote').on('click', function(){
		
		noteDialog.show({
			title : '新增笔记',
			content : require('tpl/dialogNote'),
			okText : '添加',
			onOk : function() {
				$.post('inter/admin/addNote.php', $('#noteForm').serialize(), function(data){
					if(data === "true") {
						noteDialog.close();
						refreshNote(1);
					} else {
						window.alert("添加失败");
					}
				});
			}
		});
		
	});

});