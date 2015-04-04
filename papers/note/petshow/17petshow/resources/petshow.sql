create database petshow;

create table pic_title(
	id bigint(20) unsigned not null auto_increment comment '主键',
	title varchar(128) comment '标题',
	primary key(id)
)default charset=utf8 comment='图片标题表';

create table picture(
	id bigint(20) unsigned not null auto_increment comment '主键',
	title_id bigint(20) unsigned comment '标题id',
	path varchar(256) comment '图片路径',
	primary key(id)
)default charset=utf8 comment='图片表';

create table blog(
	id bigint(20) unsigned not null auto_increment comment '主键',
	title varchar(128) comment '标题',
	short_content varchar(256) comment '摘要',
	content varchar(4096) comment '正文',
	primary key(id)
)default charset=utf8 comment='日记表';
