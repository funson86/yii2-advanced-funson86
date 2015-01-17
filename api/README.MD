# iKargo API #


# Folder Explanation #
common: common models or controllers
config: configuration file
modules: main core that contains API version
tests: test files
web: entry script 

# How to Develop API #
iKargo API is developed using Repository Service Pattern

About service pattern
http://www.devshed.com/c/a/php/php-service-layers-modeling-domain-objects/

About repository pattern

# How to Test #
All test files are inside /tests folder. API is tested using CodeCeption. You can run test with command "Grunt test" in your console. Make sure you already install grunt first. 

```php
CREATE TABLE `country` (
  `code` char(2) NOT NULL,
  `name` char(52) NOT NULL,
  `population` int(11) NOT NULL DEFAULT '0',
  PRIMARY KEY (`code`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of country
-- ----------------------------
INSERT INTO `country` VALUES ('AB', 'test', '1000');
INSERT INTO `country` VALUES ('BR', 'Brazil', '170115000');
INSERT INTO `country` VALUES ('CA', 'Canada', '1147000');
INSERT INTO `country` VALUES ('CN', 'China', '1277558000');
INSERT INTO `country` VALUES ('DE', 'Germany', '82164700');
INSERT INTO `country` VALUES ('FR', 'France', '59225700');
INSERT INTO `country` VALUES ('GB', 'United Kingdom', '59623400');
INSERT INTO `country` VALUES ('IN', 'India', '1013662000');
INSERT INTO `country` VALUES ('RU', 'Russia', '146934000');
INSERT INTO `country` VALUES ('TE', 'test', '3000');
INSERT INTO `country` VALUES ('TK', 'test', '3000');
INSERT INTO `country` VALUES ('TS', 'test', '3000');
INSERT INTO `country` VALUES ('TT', 'test1', '1000');
INSERT INTO `country` VALUES ('US', 'United States', '278357000');
INSERT INTO `country` VALUES ('ww', 'testqq', '2000');
```