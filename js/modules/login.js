define(function(require, exports, module){

	require('jquery');
	Dialog = require('modules/dialog').Dialog;
	
	var loginDialog = new Dialog();
	var registerDialog = new Dialog();
	
	$('#login').on('click', function(e){
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
	
});