define(function(require, exports, module){

	require('jquery');
	require('handlebars');
	require('pagination');
	
	Dialog = require('modules/dialog').Dialog;
	
	var loginDialog = new Dialog();
	var registerDialog = new Dialog();
	var curPage = 0;
	
	$('#loginComment').on('click', function(e){
		e.preventDefault();
		loginDialog.show({
			title : '登陆',
			content : '<form class="loginForm" id="loginForm"><div class="oneLine">用户名：<input type="text" name="username" placeholder="请输入用户名" id="usernameInput"/></div><div class="oneLine">密　码：<input type="password" name="password" placeholder="请输入密码"/></div><div class="register">没有账号？<a href="#" id="register">立即注册</a></div></form>',
			okText : '登陆',
			onShowDone : function() {
				$('#usernameInput').focus();
				$('#register').on('click', function(e){
					e.preventDefault();
					loginDialog.close();
					loginDialog.register = true;
				});
			},
			onOk : function() {
				$.post('inter/user/userLogin.php', $('#loginForm').serialize(), function(data){
					if(data == "true") {
						location.reload();
					} else {
						window.alert('用户不存在或密码错误！');
					}
				});
			},
			onCancel : function() {
				loginDialog.register = false;
			},
			onCloseDone : function() {
				if(loginDialog.register) {
					registerDialog.show({
						title : '注册',
						content : '<form class="registerForm" id="registerForm"><div class="oneLine">　用户名：<input type="text" name="username" placeholder="请输入用户名" id="usernameInput"/></div><div class="oneLine">　密　码：<input type="password" name="password" id="password" placeholder="请输入密码"/></div><div class="oneLine">确认密码：<input type="password" id="repassword" placeholder="请再次输入密码"/></div></form>',
						okText : '注册',
						onShowDone : function() {
							$('#usernameInput').focus();
						},
						onOk : function() {
							if($('#password').val() != $('#repassword').val()) {
								window.alert('两次密码不一致');
							} else {
								$.post('inter/user/userRegister.php', $('#registerForm').serialize(), function(data){
									console.log(data);
									if(data == "true") {
										location.reload();
									} else {
										window.alert('用户名已存在！');
									}
								});
							}
						}
					});
				}
			}
		});
	});
	
	var replyNum = 0;
	
	$('#sendComment').on('click', function(){
		$.post('inter/comment/addComment.php', {content : $('#userInputComment').val(), replyNum : replyNum, type : commentType, paperId : ID}, function(data) {
			if(data === "true") {
				refresh(curPage);
				$('#userInputComment').val('');
			} else {
				window.alert('评论失败');
			}
		});
	});
	
	var commentTpl = require('tpl/comments');
	
	var bindReply = function() {
		$('.reply').find('a').on('click', function(e) {
			$this = $(this);
			$('#layerNum').html($this.data('layer'));
			$('.replyInfo').css('display', 'block');
			replyNum = $this.data('id');
		});
		$('#closeReply').on('click', function(e) {
			e.preventDefault();
			$('.replyInfo').css('display', 'none');
			replyNum = 0;
		});
	};

	var refresh = function(toPage) {
		curPage = toPage;
		$.post('inter/comment/getComment.php', { type : commentType, id : ID, curPage : toPage}, function(data) {
			data = JSON.parse(data);
			for(var i=0; i<data.comment.length; i++) {
				if(data.comment[i].reply) {
					data.comment[i].reply = JSON.parse(data.comment[i].reply);
				}
			}
			if(data.totalPage) {
				$('#comments').html(Handlebars.compile(commentTpl)(data.comment));
				var pagination = $.pagination({
					toPage : parseInt(data.curPage),
					totalPage : parseInt(data.totalPage)
				});
				$('#commentsPagination').html(pagination);
				$('#commentsPagination').find('a').on('click', function(e) {
					e.preventDefault();
					refresh($(this).data('to'));
				});
				bindReply();
			}
		});
	};
	
	refresh(1);
	
	$('#donate').on('click', function(e){
		e.preventDefault();
	});
	
});