var SquareGame = function() {
	// 下落速度
	var INTERVAL = 200;
	// 所有的方块
	var squares = [
		[
			[0, 2, 0, 0],
			[0, 2, 0, 0],
			[0, 2, 0, 0],
			[0, 2, 0, 0]
		],
		[
			[0, 2, 0, 0],
			[0, 2, 0, 0],
			[0, 2, 2, 0],
			[0, 0, 0, 0]
		],
		[
			[0, 0, 2, 0],
			[0, 0, 2, 0],
			[0, 2, 2, 0],
			[0, 0, 0, 0]
		],
		[
			[0, 2, 2, 0],
			[0, 2, 2, 0],
			[0, 0, 0, 0],
			[0, 0, 0, 0]
		],
		[
			[0, 2, 0, 0],
			[2, 2, 2, 0],
			[0, 0, 0, 0],
			[0, 0, 0, 0]
		],
		[
			[0, 2, 2, 0],
			[2, 2, 0, 0],
			[0, 0, 0, 0],
			[0, 0, 0, 0]
		],
		[
			[2, 2, 0, 0],
			[0, 2, 2, 0],
			[0, 0, 0, 0],
			[0, 0, 0, 0]
		]
	];
	// 下一个方块
	var nextData = [
		[0, 0, 0, 0],
		[0, 0, 0, 0],
		[0, 0, 0, 0],
		[0, 0, 0, 0]
	];
	// 现在的方块
	var curData = [
		[0, 0, 0, 0],
		[0, 0, 0, 0],
		[0, 0, 0, 0],
		[0, 0, 0, 0]
	];
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
	// 原点
	var origin = {
		x: 0,
		y: 0
	}
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
		for(var i=0; i<curData.length; i++) {
			for(var j=0; j<curData[0].length; j++) {
				if(check(origin, i, j)) {
					gameData[origin.x + i][origin.y + j] = 0;
				}
			}
		}
	}
	// 设置数据
	var setData = function() {
		for(var i=0; i<curData.length; i++) {
			for(var j=0; j<curData[0].length; j++) {
				if(check(origin, i, j)) {
					gameData[origin.x + i][origin.y + j] = curData[i][j];
				}
			}
		}
	}
	// 能否下降
	var canDown = function() {
		var test = {};
		test.x = origin.x + 1;
		test.y = origin.y;
		return isValid(test, curData);
	}
	// 下降
	var down = function() {
		clearData();
		origin.x = origin.x + 1;
		setData();
		refreshDivs(gameData, gameDivs);
	}
	// 能否左移
	var canLeft = function() {
		var test = {};
		test.x = origin.x;
		test.y = origin.y - 1;
		return isValid(test, curData);
	}
	// 左移
	var left = function() {
		clearData();
		origin.y = origin.y - 1;
		setData();
		refreshDivs(gameData, gameDivs);
	}
	// 能否右移
	var canRight = function() {
		var test = {};
		test.x = origin.x;
		test.y = origin.y + 1;
		return isValid(test, curData);
	}
	// 右移
	var right = function() {
		clearData();
		origin.y = origin.y + 1;
		setData();
		refreshDivs(gameData, gameDivs);
	}
	// 能否旋转
	var canRotate = function() {
		var testData = [
			[0, 0, 0, 0],
			[0, 0, 0, 0],
			[0, 0, 0, 0],
			[0, 0, 0, 0]
		];
		for(var i=0; i<curData.length; i++) {
			for(var j=0; j<curData[0].length; j++) {
				testData[i][j] = curData[3-j][i];
			}
		}
		return isValid(origin, testData);
	}
	// 旋转
	var rotate = function() {
		clearData();
		var testData = [
			[0, 0, 0, 0],
			[0, 0, 0, 0],
			[0, 0, 0, 0],
			[0, 0, 0, 0]
		];
		for(var i=0; i<curData.length; i++) {
			for(var j=0; j<curData[0].length; j++) {
				testData[i][j] = curData[3-j][i];
			}
		}
		for(var i=0; i<curData.length; i++) {
			for(var j=0; j<curData[0].length; j++) {
				curData[i][j] = testData[i][j];
			}
		}
		setData();
		refreshDivs(gameData, gameDivs);
	}
	// 消除行
	var checkClear = function() {
		for(var i=gameData.length-1; i>=0; i--) {
			var clear = true;
			for(var j=0; j<gameData[0].length; j++) {
				if(gameData[i][j] != 1) {
					clear = false;
				}
			}
			if(clear) {
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
		for(var i=0; i<curData.length; i++) {
			for(var j=0; j<curData[0].length; j++) {
				if(check(origin, i, j)) {
					if(gameData[origin.x + i][origin.y + j] == 2) {
						gameData[origin.x + i][origin.y + j] = 1;
					}
				}
			}
		}
		checkClear();
		checkGameOver();
	}
	// 生成下一个方块
	var randomNext = function() {
		var ran = Math.random();
		var index = Math.ceil(ran * 7) - 1;
		for(var i=0; i<squares[index].length; i++) {
			for(var j=0; j<squares[index][0].length; j++) {
				nextData[i][j] = squares[index][i][j];
			}
		}
		refreshDivs(nextData, nextDivs);
	}
	// 使用下一个方块
	var performNext = function() {
		origin.x = 0;
		origin.y = 3;
		for(var i=0; i<nextData.length; i++) {
			for(var j=0; j<nextData[0].length; j++) {
				curData[i][j] = nextData[i][j];
			}
		}
		setData();
		randomNext();
	}
	// 绑定按键事件
	var bindKeyEvent = function() {
		document.onkeydown = function(e) {
			if (e.keyCode == 38) { //up
				if(canRotate()) {
					rotate();
				}
			} else if (e.keyCode == 39) { //right
				if(canRight()) {
					right();
				}
			} else if (e.keyCode == 40) { //down
				move();
			} else if (e.keyCode == 37) { //left
				if(canLeft()) {
					left();
				}
			} else if (e.keyCode == 32) { //space
				while(!move());
			}
		};
	}
	// 向下移动
	var move = function() {
		if(canDown()) {
			down();
			return false;
		} else {
			fixed();
			performNext();
			return true;
		}
	}
	// 初始化
	this.init = function() {
		initDivs(document.getElementById('game'), gameData, gameDivs);
		initDivs(document.getElementById('next'), nextData, nextDivs);
		refreshDivs(gameData, gameDivs);
		refreshDivs(nextData, nextDivs);
		randomNext();
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