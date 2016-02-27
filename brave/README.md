PSR-0规范

	1. 命名空间必须与绝对路径一致
	2. 类名首字母必须大写
	3. 除入口文件外，其他.php必须只有一个类


下面开发的框架符合PSR-0规范的基础框架
	
	1. 全部使用命名空间(命名空间必须与绝对路径一致，类名首字母必须大写)
	2. 所有php文件必须自动载入，不能有include/require
	3. 单一入口
	4.除入口文件外，其他".php"必须只有一个类

框架结构
phpframe
	App  存放业务逻辑
	Brave  存放公共的类文件	