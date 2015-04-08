define(function(require, exports, module){

	require('jquery');
	require('pagination');
	require('handlebars');
	
	require('modules/login');
	
	Dialog = require('modules/dialog').Dialog;
	
	var selectedId = "00";
	
	$('#heads').find('li').on('click', function() {
		$this = $(this);
		$this.addClass('current').siblings().removeClass('current');
		$('#headImageBtn').css('display', 'inline-block');
		selectedId = $this.data('id');
		
	});
	
	$('#headImageBtn').on('click', function() {
		$.post('inter/user/userSetHeadUrl.php', {imgName : selectedId}, function(data) {
			console.log(data);
			if(data == "true") {
				window.location.reload();
			} else {
				window.alert("设置头像失败");
			}
		})
	});

});