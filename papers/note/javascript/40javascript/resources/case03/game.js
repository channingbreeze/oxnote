var SquareGame = function() {
	// 下落速度
	var INTERVAL = 200;
	// 下一个方块
	var next = Square.prototype.make();
	// 现在的方块
	var cur;
	// 游戏矩阵
	var gameData = [
		[0, 0, 0, 0, 0, 0, 0, 0, 0, 0],
		[0, 0, 0, 0, 0, 0, 0, 0, 0, 0],
		[0, 0, 0, 0, 0, 0, 0, 0, 0, 0],
		[0, 0, 0, 0, 0, 0, 0, 0, 0, 0],
		[0, 0, 0, 0, 0, 0, 0, 0, 0, 0],
		[0, 0, 0, 0, 0, 0, 0, 0, 0, 0],
		[0, 0, 0, 0, 0, 0, 0, 0, 0, 0],
		[0, 0, 0, 0, 0, 0, 0, 0, 0, 0],
		[0, 0, 0, 0, 0, 0, 0, 0, 0, 0],
		[0, 0, 0, 0, 0, 0, 0, 0, 0, 0],
		[0, 0, 0, 0, 0, 0, 0, 0, 0, 0],
		[0, 0, 0, 0, 0, 0, 0, 0, 0, 0],
		[0, 0, 0, 0, 0, 0, 0, 0, 0, 0],
		[0, 0, 0, 0, 0, 0, 0, 0, 0, 0],
		[0, 0, 0, 0, 0, 0, 0, 0, 0, 0],
		[0, 0, 0, 0, 0, 0, 0, 0, 0, 0],
		[0, 0, 0, 0, 0, 0, 0, 0, 0, 0],
		[0, 0, 0, 0, 0, 0, 0, 0, 0, 0],
		[0, 0, 0, 0, 0, 0, 0, 0, 0, 0],
		[0, 0, 0, 0, 0, 0, 0, 0, 0, 0]
	];
	// 游戏divs
	var gameDivs = [];
	// 下一个的divs
	var nextDivs = [];
	// 定时器
	var timer;
	// 分数
	var score = 0;
	// 时间
	var time = 0;
	// 时间计数
	var timeCount = 0;
	// 初始化div
	var initDivs = function(container, data, divs) {
		for(var i=0; i<data.length; i++) {
			var div = [];
			for(var j=0; j<data[0].length; j++) {
				var newNode = document.createElement('div');
			    newNode.className = 'none';
			    newNode.style.top = (i*20) + 'px';
			    newNode.style.left = (j*20) + 'px';
			    container.appendChild(newNode);
			    div.push(newNode);
			}
			divs.push(div);
		}
	}
	// 更新div
	var refreshDivs = function(data, divs) {
		for(var i=0; i<data.length; i++) {
			for(var j=0; j<data[0].length; j++) {
				if(data[i][j] == 0) {
					divs[i][j].className = 'none';
				} else if(data[i][j] == 1) {
					divs[i][j].className = 'done';
				} else if(data[i][j] == 2) {
					divs[i][j].className = 'current';
				}
			}
		}
	}
	// 检测点是否合法
	var check = function(pos, x, y) {
		if(pos.x + x < 0) {
			return false;
		}
		if(pos.x + x >= gameData.length) {
			return false;
		}
		if(pos.y + y < 0) {
			return false;
		}
		if(pos.y + y >= gameData[0].length) {
			return false;
		}
		if(gameData[pos.x + x][pos.y + y] == 1) {
			return false;
		}
		return true;
	}
	// 检测数据是否可行
	var isValid = function(pos, data) {
		for(var i=0; i<data.length; i++) {
			for(var j=0; j<data[0].length; j++) {
				if(data[i][j] != 0) {
					if(!check(pos, i, j)) {
						return false;
					}
				}
			}
		}
		return true;
	}
	// 清除数据
	var clearData = function() {
		for(var i=0; i<cur.data.length; i++) {
			for(var j=0; j<cur.data[0].length; j++) {
				if(check(cur.origin, i, j)) {
					gameData[cur.origin.x + i][cur.origin.y + j] = 0;
				}
			}
		}
	}
	// 设置数据
	var setData = function() {
		for(var i=0; i<cur.data.length; i++) {
			for(var j=0; j<cur.data[0].length; j++) {
				if(check(cur.origin, i, j)) {
					gameData[cur.origin.x + i][cur.origin.y + j] = cur.data[i][j];
				}
			}
		}
	}
	// 下降
	var down = function() {
		if(cur.canDown(isValid)) {
			clearData();
			cur.down();
			setData();
			refreshDivs(gameData, gameDivs);
			return true;
		} else {
			return false;
		}
	}
	// 左移
	var left = function() {
		if(cur.canLeft(isValid)) {
			clearData();
			cur.left();
			setData();
			refreshDivs(gameData, gameDivs);
		}
	}
	// 右移
	var right = function() {
		if(cur.canRight(isValid)) {
			clearData();
			cur.right();
			setData();
			refreshDivs(gameData, gameDivs);
		}
	}
	// 旋转
	var rotate = function() {
		var a = cur.canRotate(isValid);
		if(a) {
			clearData();
			cur.rotate();
			setData();
			refreshDivs(gameData, gameDivs);
		}
	}
	// 加分
	var addScore = function(line) {
		var s = 0;
		if(line == 1) {
			s = 10;
		} else if(line == 2) {
			s = 30;
		} else if(line == 3) {
			s = 60;
		} else if(line == 4) {
			s = 100;
		}
		score = score + s;
		document.getElementById('score').innerHTML = score;
	}
	// 消除行
	var checkClear = function() {
		var line = 0;
		for(var i=gameData.length-1; i>=0; i--) {
			var clear = true;
			for(var j=0; j<gameData[0].length; j++) {
				if(gameData[i][j] != 1) {
					clear = false;
					break;
				}
			}
			if(clear) {
				line++;
				for(var m=i; m>0; m--) {
					for(var n=0; n<gameData[0].length; n++) {
						gameData[m][n] = gameData[m-1][n];
					}
				}
				for(var n=0; n<gameData[0].length; n++) {
					gameData[0][n] = 0;
				}
				i++;
			}
		}
		addScore(line);
	}
	// 检查游戏结束
	var checkGameOver = function() {
		var gameOver = false;
		for(var i=0; i<gameData[0].length; i++) {
			if(gameData[0][i] == 1) {
				gameOver = true;
				break;
			}
		}
		if(gameOver) {
			document.onkeydown = null;
			clearInterval(timer);
			window.alert('game over!');
		}
	}
	// 方块移到底部，给它固定
	var fixed = function() {
		for(var i=0; i<cur.data.length; i++) {
			for(var j=0; j<cur.data[0].length; j++) {
				if(check(cur.origin, i, j)) {
					if(gameData[cur.origin.x + i][cur.origin.y + j] == 2) {
						gameData[cur.origin.x + i][cur.origin.y + j] = 1;
					}
				}
			}
		}
		checkClear();
		checkGameOver();
	}
	// 生成下一个方块
	var randomNext = function() {
		next = next.make();
	}
	// 使用下一个方块
	var performNext = function() {
		cur = next;
		setData();
		randomNext();
		refreshDivs(next.data, nextDivs);
	}
	// 绑定按键事件
	var bindKeyEvent = function() {
		document.onkeydown = function(e) {
			if (e.keyCode == 38) { //up
				rotate();
			} else if (e.keyCode == 39) { //right
				right();
			} else if (e.keyCode == 40) { //down
				move();
			} else if (e.keyCode == 37) { //left
				left();
			} else if (e.keyCode == 32) { //space
				while(!move());
			}
		};
	}
	// 向下移动
	var move = function() {
		timeCount = timeCount + 1;
		if(timeCount == 5) {
			timeCount = 0;
			time = time + 1;
			document.getElementById('time').innerHTML = time;
		}
		if(down()) {
			return false;
		} else {
			fixed();
			performNext();
			refreshDivs(gameData, gameDivs);
			return true;
		}
	}
	// 初始化，这里是入口
	this.init = function() {
		initDivs(document.getElementById('game'), gameData, gameDivs);
		initDivs(document.getElementById('next'), next.data, nextDivs);
		refreshDivs(gameData, gameDivs);
		refreshDivs(next.data, nextDivs);
	}
	// 开始
	this.start = function() {
		performNext();
		bindKeyEvent();
		timer = setInterval(move, INTERVAL);
	}
	// 结束
	this.stop = function() {
		clearInterval(timer);
		document.onkeydown = null;
	}
}