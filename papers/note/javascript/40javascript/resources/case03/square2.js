var Square2 = function() {
	this.square = Square;
	this.square();
	this.rotates = [
		[
			[0, 2, 0, 0],
			[0, 2, 0, 0],
			[0, 2, 2, 0],
			[0, 0, 0, 0]
		],
		[
			[0, 0, 0, 0],
			[0, 2, 2, 2],
			[0, 2, 0, 0],
			[0, 0, 0, 0]
		],
		[
			[0, 0, 0, 0],
			[0, 2, 2, 0],
			[0, 0, 2, 0],
			[0, 0, 2, 0]
		],
		[
			[0, 0, 0, 0],
			[0, 0, 2, 0],
			[2, 2, 2, 0],
			[0, 0, 0, 0]
		]
	];
}
Square2.prototype = Square.prototype;