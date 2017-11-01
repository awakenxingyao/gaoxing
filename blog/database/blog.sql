-- 文章表
drop table if exists gx_articles;
create table gx_articles (
    `id` int unsigned not null auto_increment comment 'ID',
    `subject` varchar(255) not null default '' comment '文章标题',
    `cover` varchar(255) not null default '' comment '文章封面',
    `summary` varchar(255) not null default '' comment '文章摘要',
    `content` text comment '文章内容',
    `status` enum('publish', 'save') not null default 'publish' comment '文章状态，publish发布，save临时存储',
    `category_id` int unsigned null comment '文章所属分类ID',
    `user_id` int unsigned null comment '文章作者ID',
    created_at timestamp not null default '0000-00-00 00:00:00' comment '创建时间',
    updated_at timestamp not null default '0000-00-00 00:00:00' comment '修改时间',
    primary key (`id`),
    key (category_id),
    key (user_id)
) engine=innodb charset=utf8 comment='文章';

-- 分类表
create table gx_categories (
    `id` int unsigned not null auto_increment comment 'ID',
    `title` varchar(64) not null default '' comment '分类',
    `sort` int not null default 100 comment '排序号',
    created_at timestamp not null default '0000-00-00 00:00:00',
    updated_at timestamp not null default '0000-00-00 00:00:00',
    primary key (`id`)
) engine=innodb charset=utf8mb4 comment='分类';
-- 初始化数据 未分类

-- 标签表
create table gx_tags (
	`id` int unsigned not null auto_increment comment 'ID',
	`title` varchar(64) not null default '' comment '标签',
    created_at timestamp not null default '0000-00-00 00:00:00' comment '创建时间',
    updated_at timestamp not null default '0000-00-00 00:00:00' comment '修改时间',
	primary key (`id`)
) engine=innodb charset=utf8mb4 comment='标签';


-- 标签文章关联表
create table gx_tag_article (
	`id` int unsigned not null auto_increment comment 'PK',
	`tag_id` int unsigned not null default 0 comment '标签ID',
	`article_id` int unsigned not null default 0 comment '文章ID',
    created_at timestamp not null default '0000-00-00 00:00:00',
    updated_at timestamp not null default '0000-00-00 00:00:00',
	primary key (`id`)
) charset=utf8;



insert into gx_user values (null, 'itbull', md5('1234abcd'), '泰牛(ITBull)', '20160101/avatar.png', unix_timestamp('2016-01-01'));