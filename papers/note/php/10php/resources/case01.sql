create database mynote;

create table test(
	id bigint(20) unsigned not null auto_increment comment '主键',
	username varchar(64) comment '用户名',
	passwd varchar(64) comment '密码',
	primary key(id)
)default charset=utf8 comment='测试表';

insert into test (username, passwd) values ('欣欣', 'xinxin');
insert into test (username, passwd) values ('玩命牛', 'wanmingniu');

select * from test;