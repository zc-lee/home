SET NAMES UTF8;
DROP DATABASE IF EXISTS lee_home;
CREATE DATABASE lee_home CHARSET=UTF8;
USE lee_home;

-- 用户表
DROP TABLE IF EXISTS `user`;
CREATE TABLE user(
    id VARCHAR(32),
    password VARCHAR(32),
    nickName VARCHAR(32),
    avatar VARCHAR(32),
    tel VARCHAR(11)
);
-- 插入
INSERT INTO user VALUES
(null,'123456','nickName','avatar','12345678901'),
(null,'123456','nickName','avatar','12345678901');

-- 查询
-- SELECT 表字段 / * FROM 表名 WHERE 任何条件 LIMIT 返回的记录数 OFFSET 开始查询的数据偏移量。默认情况下偏移量为0
-- SELECT * FROM user;
-- SELECT nickName,avatar FROM user;
-- SELECT * FROM user WHERE uid=1;

-- 更新
-- UPDATE table_name SET 表字段=value  WHERE 任何条件;

-- 删除
-- DELETE FROM table_name [WHERE Clause]

-- 目录表
DROP TABLE IF EXISTS `menu`;
CREATE TABLE menu(
    id INT PRIMARY KEY AUTO_INCREMENT,
    title VARCHAR(10),
    icon VARCHAR(32),
    link_type INT COMMENT '链接类型 0 menu 1 content null 无，代表该目录为一级目录',
    link_id VARCHAR(32)
);

-- 内容表
DROP TABLE IF EXISTS `content`;
CREATE TABLE content(
    id INT(11) NOT NULL PRIMARY KEY AUTO_INCREMENT
);

DROP TABLE IF EXISTS `banner`;
CREATE TABLE `banner` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(50) DEFAULT NULL COMMENT 'Banner名称，通常作为标识',
  `description` varchar(255) DEFAULT NULL COMMENT 'Banner描述',
  `delete_time` int(11) DEFAULT NULL,
  `update_time` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COMMENT='banner管理表';

-- ----------------------------
-- Records of banner
-- ----------------------------
INSERT INTO `banner` VALUES ('1', '首页置顶', '首页轮播图', null, null);