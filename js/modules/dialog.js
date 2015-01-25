define(function(require, exports){
	
	require('jquery');
	
	var Dialog = function() {
		
		var mask = '<div id="dialog_mask" class="dialog_mask"></div>';
		
		var $dialog = null;
		var $mask = null;
		
		var options = {
			onOk : function(){},
			onCancel : function(){},
			okText : '确定',
			cancelText : '取消',
			title : '玩命牛的成长记录',
			content : '<div>请输入内容</div>',
			onShowDone : function(){},
			onCloseDone : function(){}
		};
		
		var showMask = function() {
			$('body').append(mask);
			$mask = $('#dialog_mask');
			var maxHeight = $('body').height();
			if(maxHeight < $(window).height()) {
				maxHeight = $(window).height();
			}
			$mask.height( maxHeight );
		};
		
		var removeMask = function() {
			$mask.remove();
			$mask = null;
		};
		
		var makeDialog = function() {
			var dialog = '<div id="dialog" class="dialog"><div class="title">' + options.title + '</div><div class="content">' + options.content + '</div><div class="footer"><div class="buttons"><button id="dialog_button_ok">' + options.okText + '</button><button id="dialog_button_cancel">' + options.cancelText + '</button></div></div><div class="close"><a id="dialog_close_button" href="#">X</a></div></div>';
			return dialog;
		};
		
		var showDialog = function() {
			$('body').append(makeDialog());
			$dialog = $('#dialog');
			$dialog.css('left', ($('body').width()/2 - $('#dialog').width()/2) + 'px');
			$dialog.css('top', -($('#dialog').height()) + 'px');
			$dialog.animate({top : '200px'}, {easing : 'swing', duration : 100, complete : function(){
				$dialog.animate({top : '80px'}, {easing : 'swing', duration : 100, complete : function(){
					$dialog.animate({top : '100px'}, {easing : 'swing', duration : 100, complete : function(){
						$dialog.on('keydown', function(e){
							if(e.keyCode == 13) {
								$('#dialog_button_ok').click();
							}
						});
						options.onShowDone();
					}});
				}});
			}});
			$('#dialog_close_button').on('click', function(e){
				e.preventDefault();
				options.onCancel();
				removeDialog();
			});
			$('#dialog_button_ok').on('click', function(){
				options.onOk();
			});
			$('#dialog_button_cancel').on('click', function(){
				options.onCancel();
				removeDialog();
			});
		};
		
		var removeDialog = function() {
			$dialog.animate({top : '120px'}, {easing : 'swing', duration : 100, complete : function(){
				$dialog.animate({top : -($('#dialog').height()) + 'px'}, {easing : 'linear', duration : 150, complete : function(){
					removeMask();
					$dialog.remove();
					options.onCloseDone();
					$dialog = null;
				}});
			}});
		};
		
		this.show = function(ops) {
			showMask();
			$.extend(options, ops);
			showDialog();
		};
		
		this.close = function() {
			removeDialog();
		};
		
	};
	
	exports.Dialog = Dialog;
	
});
