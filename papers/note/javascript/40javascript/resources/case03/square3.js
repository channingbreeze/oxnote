var Square3 = function() {
	this.square = Square;
	this.square();
	this.rotates = [
		[
			[0, 0, 2, 0],
			[0, 0, 2, 0],
			[0, 2, 2, 0],
			[0, 0, 0, 0]
		],
		[
			[0, 0, 0, 0],
			[0, 2, 0, 0],
			[0, 2, 2, 2],
			[0, 0, 0, 0]
		],
		[
			[0, 0, 0, 0],
			[0, 2, 2, 0],
			[0, 2, 0, 0],
			[0, 2, 0, 0]
		],
		[
			[0, 0, 0, 0],
			[2, 2, 2, 0],
			[0, 0, 2, 0],
			[0, 0, 0, 0]
		]
	];
}
Square3.prototype = Square.prototype;