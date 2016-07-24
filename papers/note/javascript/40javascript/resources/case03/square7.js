var Square7 = function() {
	this.square = Square;
	this.square();
	this.rotates = [
		[
			[2, 2, 0, 0],
			[0, 2, 2, 0],
			[0, 0, 0, 0],
			[0, 0, 0, 0]
		],
		[
			[0, 2, 0, 0],
			[2, 2, 0, 0],
			[2, 0, 0, 0],
			[0, 0, 0, 0]
		],
		[
			[2, 2, 0, 0],
			[0, 2, 2, 0],
			[0, 0, 0, 0],
			[0, 0, 0, 0]
		],
		[
			[0, 2, 0, 0],
			[2, 2, 0, 0],
			[2, 0, 0, 0],
			[0, 0, 0, 0]
		]
	];
}
Square7.prototype = Square.prototype;