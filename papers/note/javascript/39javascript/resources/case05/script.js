var lis = document.getElementsByTagName('li');
for(var i=0; i<lis.length; i++) {
	(function(){
		var li = lis[i];
		var regStr = li.getAttribute('reg');
		var input = li.getElementsByTagName('input')[0];
		var button = li.getElementsByTagName('button')[0];
		button.onclick = function() {
			var reg = new RegExp(regStr);
			if(reg.test(input.value)) {
				alert('yes');
			} else {
				alert('no');
			}
		}
	})();
}