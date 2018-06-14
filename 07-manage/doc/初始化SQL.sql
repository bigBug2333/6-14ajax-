DROP TABLE IF EXISTS `user`;
CREATE TABLE `user` (
  `id` int(12) NOT NULL AUTO_INCREMENT,
  `name` varchar(200) NOT NULL,
  `sex` varchar(20) NOT NULL DEFAULT '男',
  `academy` varchar(400) NOT NULL DEFAULT '前端与移动开发学院',
  `introduce` varchar(1000) NOT NULL DEFAULT '暂无',
  `createTime` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=1 DEFAULT CHARSET=utf8;

INSERT INTO `user` VALUES ('1', '胡聪聪', '男', '前端与移动开发学院', '暂无', '2017-05-26 16:39:40');
INSERT INTO `user` VALUES ('2', '胡聪聪', '男', '前端与移动开发', '哈哈哈', '2017-05-26 16:40:27');