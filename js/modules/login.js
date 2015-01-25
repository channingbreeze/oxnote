define(function(require, exports, module){

	require('jquery');
	Dialog = require('modules/dialog').Dialog;
	
	var loginDialog = new Dialog();
	var registerDialog = new Dialog();
	
	$('#login').on('click', function(e){
		e.preventDefault();
		loginDialog.show({
			title : '登陆',
			content : require('tpl/dialogLogin'),
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
						content : require('tpl/dialogRegister'),
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
	
	$('#logout').on('click', function(e){
		console.log('11');
		e.preventDefault();
		$.post('inter/user/userLogout.php', '', function(data) {
			console.log(data);
			if(data == "success") {
				location.reload();
			}
		});
	});
	
});