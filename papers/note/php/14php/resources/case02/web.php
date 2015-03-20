<!DOCTYPE html>
<head>
<meta charset=utf-8 />
<title>文件上传</title>
</head>
<body>
	<input type="file" name="pic" id="uploadFile" />
	<div id="progress"></div>
	<script>
    document.getElementById('uploadFile').onchange = function() {
        var fd = new FormData();
        fd.append(this.name, this.files[0]);
        var xhr = new XMLHttpRequest();
        xhr.open('POST', '../case01/upload.php', true);
        xhr.upload.onprogress = function (ev) {
        	percent = 100 * ev.loaded / ev.total;
        	document.getElementById('progress').innerHTML = percent + '%';
        }
        xhr.send(fd);
    }
	</script>
</body>