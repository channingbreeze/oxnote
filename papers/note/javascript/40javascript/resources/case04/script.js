function Student(name, age) {
	this.name = name;
	this.age = age;
	this.show = function() {
		document.write('我是' + this.name + ', 我' + this.age + '岁<br/>');
	}
}

function Pupil(name, age) {
	this.stu = Student;  //这里是关键！
	this.stu(name, age);
	this.gotoSchool = function() {
		document.write('我是小学生，我去上学了<br/>');
	}
}

function Middle(name, age) {
	this.stu = Student;  //这里是关键！
	this.stu(name, age);
	this.gotoSchool = function() {
		document.write('我是中学生，我去上学了<br/>');
	}
}

var p = new Pupil('wanmingniu', 10);
p.show();
p.gotoSchool();
var m = new Middle('xinxin', 15);
m.show();
m.gotoSchool();