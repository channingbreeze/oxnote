function Animal(name, food, hobby, skill) {
	this.name = name;
	this.food = food;
	this.hobby = hobby;
	this.skill = skill;
	this.write = function() {
		document.write("我是一只" + this.name + "<br/>");
		document.write("我喜欢吃" + this.food + "<br/>");
		document.write("我喜欢" + this.hobby + "<br/>");
		document.write(this.skill + "<br/>");
	}
}
var cat = new Animal("小猫", "鱼", "抓老鼠", "我眼睛晚上会发光");
var dog = new Animal("小狗", "骨头", "欺负猫", "我鼻子特别灵");
cat.write();
document.write("<br/>");
dog.write();