var Square = function() {
	// 方块数据
	this.data = [
		[0, 0, 0, 0],
		[0, 0, 0, 0],
		[0, 0, 0, 0],
		[0, 0, 0, 0]
	];
	// 原点
	this.origin = {
		x: 0,
		y: 0
	}
	// 旋转方向
	this.dir = 0;
}
Square.prototype.make = function() {
	var index = Math.ceil(Math.random() * 7) - 1;
	var s;
	if(index == 0) {
		s = new Square1();
	} else if(index == 1) {
		s = new Square2();
	} else if(index == 2) {
		s = new Square3();
	} else if(index == 3) {
		s = new Square4();
	} else if(index == 4) {
		s = new Square5();
	} else if(index == 5) {
		s = new Square6();
	} else if(index == 6) {
		s = new Square7();
	}
	s.origin.x = 0;
	s.origin.y = 3;
	var dir = Math.ceil(Math.random() * 4) - 1;
	s.rotate(dir);
	return s;
}
Square.prototype.canRotate = function(isValid) {
	var d = this.dir + 1;
	if(d == 4) {
		d = 0;
	}
	var t = [
		[0, 0, 0, 0],
		[0, 0, 0, 0],
		[0, 0, 0, 0],
		[0, 0, 0, 0]
	];
	for(var i=0; i<this.data.length; i++) {
		for(var j=0; j<this.data[0].length; j++) {
			t[i][j] = this.rotates[d][i][j];
		}
	}
	return isValid(this.origin, t);
}
Square.prototype.rotate = function(num) {
	if(!num) num = 1;
	this.dir = this.dir + num;
	while(this.dir >= 4) {
		this.dir = this.dir - 4;
	}
	for(var i=0; i<this.data.length; i++) {
		for(var j=0; j<this.data[0].length; j++) {
			this.data[i][j] = this.rotates[this.dir][i][j];
		}
	}
}
Square.prototype.canDown = function(isValid) {
	var test = {};
	test.x = this.origin.x + 1;
	test.y = this.origin.y;
	return isValid(test, this.data);
}
Square.prototype.down = function() {
	this.origin.x = this.origin.x + 1;
}
Square.prototype.canLeft = function(isValid) {
	var test = {};
	test.x = this.origin.x;
	test.y = this.origin.y - 1;
	return isValid(test, this.data);
}
Square.prototype.left = function() {
	this.origin.y = this.origin.y - 1;
}
Square.prototype.canRight = function(isValid) {
	var test = {};
	test.x = this.origin.x;
	test.y = this.origin.y + 1;
	return isValid(test, this.data);
}
Square.prototype.right = function() {
	this.origin.y = this.origin.y + 1;
}