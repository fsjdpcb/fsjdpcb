# HDCMS 

###希望大家多提交宝贵意义，帮助HDCMS更稳定，更强大，谢谢！ 
* 后盾网HDCMS是一个用PHP编写的内容管理系统软件包，数据库采用Mysql。提供强大的、完整的功能，满足快速网站开发的目的。你不需要很长时间就可以开发出一个很不错的网站，而且后盾网提供很多优秀模板，让你连做模板的时间也省掉，而且我们会定期举行免费远程培训，让你的学习与使用变得更轻松。

----
# 环境要求
* PHP版本需要5.1+以上才可以。

----
# 100%免费
* HDCMS是完全免费的，你不用担心任何版权问题 
* 你可以用在任意网站（包括商业网站）你不需要支付任何费用



----
# 交流
* 后盾网论坛： [http://bbs.houdunwang.com](http://bbs.houdunwang.com/forum-105-1.html "后盾网论坛")

* HDPHP官网： [http://www.hdphp.com ](http://www.hdphp.com "HDPHP官网")

![后盾网  人人做后盾](https://git.oschina.net/houdunwang/hdcms/raw/master/HDCMS/Static/image/houdunwang.jpg)  

----
# 界面预览

![后盾网  人人做后盾](https://git.oschina.net/houdunwang/hdcms/raw/master/HDCMS/Static/image/hdcms.jpg)

----
# 优秀特性支持
* 提供多项优化策略，速度非常快
* 采用 MVC 设计模式
* 生成干净的 URL
* 灵活简单的html标签数据调用
* 内容页tag管理
* 全站搜索关键词管理
* 全站HTML静态化
* 安全的数据备份
* 自定义模型管理
* 支持Memcached与NoSql
* 灵活简单的标签特性
* 每周更新一个新功能
 
----
#安全性
HDCMS完全基于后盾网HDPHP框架开发提供了众多的安全特性，产品安全无忧。这些特性包括：

* COOKIE加密处理
* 数据预处理机制
* XSS安全防护
* 表单自动验证
* 强制数据类型转换
* 输入数据过滤
* 表单令牌验证
* 防SQL注入
* 图像上传检测

----

#商业友好的开源协议
HDCMS遵循Apache2开源协议发布。Apache Licence是著名的非盈利开源组织Apache采用的协议。该协议和BSD类似，鼓励代码共享和尊重原作者的著作权，同样允许代码修改，再作为开源或商业软件发布。

----

# 更新日志 #
### 2014-11-09
1. 重新设计安装视图

### 2014-10-27
1. 修复生成静态后第1页不存在问题
2. 新增内容关键词替换插件(增强网站SEO)


### 2014-10-20
1. 修复中文分词Tag词典路径错误
2. 修复删除副表content字段时无法添加文章问题
3. arclist恢复order='new'属性


### 2014-10-19
1. 新增百度地图插件
2. 新增网站地图插件
3. 优化插件管理模块

### 2014-10-17
1. 增加自动提取关键字与TAG配置项

### 2014-10-16
1. 修复多文件上传字段错误的问题
2. 修复模型字段设置上传文件类型失效问题
3. 添加友情链接帮助文档
4. 删除文章时删除文章的静态文件

### 2014-10-15
1. 增加首次安装时自动更新全站缓存
2. 更改安装提示建议
3. 修复会员中心关闭失败问题


### 2014-10-14
1. 修复备份失败问题
2. 增加客户端版本验证
3. 优化channel支持嵌套调用
4. 优化channel标签可以嵌套arclist标签

### 2014-10-13
1. 修复下载远程图片目录存放错误
2. 修复部分部分下载远程图片为缩略图的地址问题
3. 修复会员注册后，登录时提示会员不存在的问题
4. 编辑文章时更新关联文章
5. 修复备份不成功问题

### 2014-10-11
1. 修复模板调用广告位报错的问题
2. 优化富文本编辑器图片上传方式
3. 优化编辑器代码高亮样式
4. 增加Literal标签使模板引擎不解析包裹内容

### 2014-10-10
1. arclist标签cid属性可以设置多个栏目cid
2. 优化：arclist标签调用自定义模型必须设置mid的问题
3. 解决列表页分页无效问题
4. 修复后台缓存更新失败的问题

### 2014-10-09
1. 新增广告位插件
2. 新增自动执行的“计划任务”功能
3. 新增定时生成首页静态计划任务程序
4. 更新安装程序数据包
5. 新增文章定时发布功能
6. 修复预览广告显示错误问题
7. 解决Linux下报Addons表不存在问题
8. 默认URL地址关闭伪静态
9. 增加schannel标签用于调取子栏目
10. 优化广告插件增加广告图片标题

### 2014-10-08
1. 增加插件管理帮助文档
2. 增加插件管理前台URL调用链接
3. 修复栏目图片地址错误
4. 修复内容页缩略图地址错误
5. 添加内容页{$hdcms.url}当前文章URL地址变量
6. 添加内容页{$hdcms.caturl}用于显示当前栏目url
7. 修复编辑文章时Tag数据丢失问题
8. 修复模板Tag标签链接错误
9. 修复在php5.3以下Search插件按日期搜索失效问题
10. 新增内容页{$hdcms.tag}变量
11. 修复arclist、pagelist标签order属性失效问题
12. 新增删除栏目时可一并删除子栏目数据更方便
13. 新增栏目批量设置模板功能

### 2014-10-07
1. 修复后台删除会员失效的问题
2. 修复新会员注册时默认为游客身份的问题
3. 添加配置组功能，设置配置项更灵活
4. 新增“会员表单”插件

### 2014-10-03
1. 修复PHP5.2时登录后台闪退的问题
2. 增加批量设置子栏目权限功能

### 2014-09-29
1. 会员没有权限操作的栏目不显示
2. 父栏目没有操作权限（添加、修改）子栏目不显示
3. 栏目批量设置增加“投稿不需要审核”设置
4. 修复会员中心头像不能编辑的问题
5. 修复后台模板风格图片不显示的问题
6. 修复会员可以在封面栏目发表文章的错误
7. 修复编辑文章时更改文章发布者错误

### 2014-09-28
1. 修复系统安装后配置项WEB_NAME错误
2. 修复Linux下不能选择模板文件与后台模板风格不显示问题

### 2014-09-26
1. 修改栏目权限控制机制，会员与管理员统一控制
2. 增加模型开关
3. 增加模型前台投稿开关
4. 增加文章积分扣除操作

### 2014-09-25
1. 添加模板文件title
2. 修复后台文章删除时会删除全部文章错误
3. 修复配置项变量名错误


### 2014-09-22
1. 栏目内有文章时不允许更改模型
2. 增加文字内容字段长度，可容纳更多文字
3. 关闭UEDITOR自动保存带来的视觉体验不好
4. 修复没有缩略图时自动提取内容图做为缩略图
5. 修复内容页点击数不变的问题
6. 修复arclist设置指定aid时无结果问题
7. 修复IE8编辑器出现在一个问题
8. 解决IE8下编辑栏目成功但返回错误的问题（由于多次提交造成）


### 2014-09-21
1. 新建插件时可以创建标签(Tag)目录
2. 修复超级管理员前台无法查看审核中的文章错误


### 2014-08-23
1. 替换新版HDPHP框架
2. 整体架构重新设计，性能提高50%