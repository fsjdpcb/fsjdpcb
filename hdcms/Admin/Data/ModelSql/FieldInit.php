<?php
//新建模型时添加Field数据
$db->exe("INSERT INTO ".$db_prefix."field (`mid`,`status`,`field_type`,`table_type`,`table_name`,`field_name`,`title`,`tips`,`enable`,`is_system`,`fieldsort`,`set`,`css`,`minlength`,`maxlength`,`validate`,`required`,`error`,`isunique`,`isbase`,`issearch`,`isadd`) VALUES('{$mid}','1','title','1','{$table}','title','标题','','1','1','1','a:2:{s:4:\"size\";s:3:\"300\";s:7:\"default\";s:0:\"\";}','','0','100','','1','','0','1','1','1')");
$db->exe("INSERT INTO ".$db_prefix."field (`mid`,`status`,`field_type`,`table_type`,`table_name`,`field_name`,`title`,`tips`,`enable`,`is_system`,`fieldsort`,`set`,`css`,`minlength`,`maxlength`,`validate`,`required`,`error`,`isunique`,`isbase`,`issearch`,`isadd`) VALUES('{$mid}','1','input','1','{$table}','html_path','html文件名','','1','1','100','a:3:{s:4:\"size\";s:3:\"300\";s:7:\"default\";s:0:\"\";s:8:\"ispasswd\";s:1:\"0\";}','','0','','','0','','0','1','0','0')");
$db->exe("INSERT INTO ".$db_prefix."field (`mid`,`status`,`field_type`,`table_type`,`table_name`,`field_name`,`title`,`tips`,`enable`,`is_system`,`fieldsort`,`set`,`css`,`minlength`,`maxlength`,`validate`,`required`,`error`,`isunique`,`isbase`,`issearch`,`isadd`) VALUES('{$mid}','1','flag','1','{$table}','flag','属性','','1','1','12','','','0','','','0','','0','1','1','0')");
$db->exe("INSERT INTO ".$db_prefix."field (`mid`,`status`,`field_type`,`table_type`,`table_name`,`field_name`,`title`,`tips`,`enable`,`is_system`,`fieldsort`,`set`,`css`,`minlength`,`maxlength`,`validate`,`required`,`error`,`isunique`,`isbase`,`issearch`,`isadd`) VALUES('{$mid}','1','input','1','{$table}','seo_title','SEO标题','','1','1','13','a:3:{s:4:\"size\";s:3:\"300\";s:7:\"default\";s:0:\"\";s:8:\"ispasswd\";s:1:\"0\";}','','0','','','0','','0','1','0','0')");
$db->exe("INSERT INTO ".$db_prefix."field (`mid`,`status`,`field_type`,`table_type`,`table_name`,`field_name`,`title`,`tips`,`enable`,`is_system`,`fieldsort`,`set`,`css`,`minlength`,`maxlength`,`validate`,`required`,`error`,`isunique`,`isbase`,`issearch`,`isadd`) VALUES('{$mid}','1','thumb','1','{$table}','thumb','缩略图','','1','1','20','','','0','','','0','','0','0','0','1')");
$db->exe("INSERT INTO ".$db_prefix."field (`mid`,`status`,`field_type`,`table_type`,`table_name`,`field_name`,`title`,`tips`,`enable`,`is_system`,`fieldsort`,`set`,`css`,`minlength`,`maxlength`,`validate`,`required`,`error`,`isunique`,`isbase`,`issearch`,`isadd`) VALUES('{$mid}','1','cid','1','{$table}','cid','栏目','','1','1','2','','','0','','','0','','0','1','0','1')");
$db->exe("INSERT INTO ".$db_prefix."field (`mid`,`status`,`field_type`,`table_type`,`table_name`,`field_name`,`title`,`tips`,`enable`,`is_system`,`fieldsort`,`set`,`css`,`minlength`,`maxlength`,`validate`,`required`,`error`,`isunique`,`isbase`,`issearch`,`isadd`) VALUES('{$mid}','1','input','1','{$table}','source','来源','','1','1','26','a:3:{s:4:\"size\";s:3:\"150\";s:7:\"default\";s:0:\"\";s:8:\"ispasswd\";s:1:\"0\";}','','0','','','0','','0','0','0','0')");
$db->exe("INSERT INTO ".$db_prefix."field (`mid`,`status`,`field_type`,`table_type`,`table_name`,`field_name`,`title`,`tips`,`enable`,`is_system`,`fieldsort`,`set`,`css`,`minlength`,`maxlength`,`validate`,`required`,`error`,`isunique`,`isbase`,`issearch`,`isadd`) VALUES('{$mid}','1','input','1','{$table}','redirecturl','转向链接','','1','1','21','a:3:{s:4:\"size\";s:3:\"150\";s:7:\"default\";s:0:\"\";s:8:\"ispasswd\";s:1:\"0\";}','','0','','/^http:\\/\\//','0','','0','0','0','0')");
$db->exe("INSERT INTO ".$db_prefix."field (`mid`,`status`,`field_type`,`table_type`,`table_name`,`field_name`,`title`,`tips`,`enable`,`is_system`,`fieldsort`,`set`,`css`,`minlength`,`maxlength`,`validate`,`required`,`error`,`isunique`,`isbase`,`issearch`,`isadd`) VALUES('{$mid}','1','datetime','1','{$table}','addtime','添加时间','','1','1','25','a:1:{s:6:\"format\";s:1:\"1\";}','','0','','','0','','0','0','0','0')");
$db->exe("INSERT INTO ".$db_prefix."field (`mid`,`status`,`field_type`,`table_type`,`table_name`,`field_name`,`title`,`tips`,`enable`,`is_system`,`fieldsort`,`set`,`css`,`minlength`,`maxlength`,`validate`,`required`,`error`,`isunique`,`isbase`,`issearch`,`isadd`) VALUES('{$mid}','1','template','1','{$table}','template','模板','','1','1','100','','','0','','','0','','0','1','0','0')");
$db->exe("INSERT INTO ".$db_prefix."field (`mid`,`status`,`field_type`,`table_type`,`table_name`,`field_name`,`title`,`tips`,`enable`,`is_system`,`fieldsort`,`set`,`css`,`minlength`,`maxlength`,`validate`,`required`,`error`,`isunique`,`isbase`,`issearch`,`isadd`) VALUES('{$mid}','1','tag','1','{$table}','tag','tag','','1','1','17','a:3:{s:4:\"size\";s:3:\"300\";s:7:\"default\";s:0:\"\";s:8:\"ispasswd\";s:1:\"0\";}','','0','','','0','','0','1','0','0')");
$db->exe("INSERT INTO ".$db_prefix."field (`mid`,`status`,`field_type`,`table_type`,`table_name`,`field_name`,`title`,`tips`,`enable`,`is_system`,`fieldsort`,`set`,`css`,`minlength`,`maxlength`,`validate`,`required`,`error`,`isunique`,`isbase`,`issearch`,`isadd`) VALUES('{$mid}','1','box','1','{$table}','url_type','文章访问方式','','1','1','100','a:3:{s:7:\"options\";s:45:\"1|静态访问,2|动态访问 ,3|继承栏目\";s:9:\"form_type\";s:5:\"radio\";s:7:\"default\";s:1:\"3\";}','','0','','','0','','0','1','0','0')");
$db->exe("INSERT INTO ".$db_prefix."field (`mid`,`status`,`field_type`,`table_type`,`table_name`,`field_name`,`title`,`tips`,`enable`,`is_system`,`fieldsort`,`set`,`css`,`minlength`,`maxlength`,`validate`,`required`,`error`,`isunique`,`isbase`,`issearch`,`isadd`) VALUES('{$mid}','1','number','1','{$table}','arc_sort','排序','','1','1','100','a:5:{s:10:\"field_type\";s:9:\"mediumint\";s:11:\"num_integer\";s:1:\"6\";s:11:\"num_decimal\";s:1:\"2\";s:4:\"size\";s:3:\"150\";s:7:\"default\";s:3:\"100\";}','','0','','','0','','0','0','0','0')");
$db->exe("INSERT INTO ".$db_prefix."field (`mid`,`status`,`field_type`,`table_type`,`table_name`,`field_name`,`title`,`tips`,`enable`,`is_system`,`fieldsort`,`set`,`css`,`minlength`,`maxlength`,`validate`,`required`,`error`,`isunique`,`isbase`,`issearch`,`isadd`) VALUES('{$mid}','1','input','1','{$table}','keywords','关键字','','1','1','18','a:3:{s:4:\"size\";s:3:\"300\";s:7:\"default\";s:0:\"\";s:8:\"ispasswd\";s:1:\"0\";}','','0','','','0','','0','1','0','0')");
$db->exe("INSERT INTO ".$db_prefix."field (`mid`,`status`,`field_type`,`table_type`,`table_name`,`field_name`,`title`,`tips`,`enable`,`is_system`,`fieldsort`,`set`,`css`,`minlength`,`maxlength`,`validate`,`required`,`error`,`isunique`,`isbase`,`issearch`,`isadd`) VALUES('{$mid}','1','textarea','1','{$table}','description','描述','','1','1','19','a:3:{s:5:\"width\";s:3:\"500\";s:6:\"height\";s:3:\"100\";s:7:\"default\";s:0:\"\";}','','0','','','0','','0','1','0','1')");
$db->exe("INSERT INTO ".$db_prefix."field (`mid`,`status`,`field_type`,`table_type`,`table_name`,`field_name`,`title`,`tips`,`enable`,`is_system`,`fieldsort`,`set`,`css`,`minlength`,`maxlength`,`validate`,`required`,`error`,`isunique`,`isbase`,`issearch`,`isadd`) VALUES('{$mid}','1','content','2','{$table}_data','content','正文','','1','1','14','','','0','','','0','','0','1','0','1')");
$db->exe("INSERT INTO ".$db_prefix."field (`mid`,`status`,`field_type`,`table_type`,`table_name`,`field_name`,`title`,`tips`,`enable`,`is_system`,`fieldsort`,`set`,`css`,`minlength`,`maxlength`,`validate`,`required`,`error`,`isunique`,`isbase`,`issearch`,`isadd`) VALUES('{$mid}','1','number','1','{$table}','click','点击数','','1','1','100','a:4:{s:11:\"num_integer\";s:1:\"6\";s:11:\"num_decimal\";s:1:\"2\";s:4:\"size\";s:3:\"150\";s:7:\"default\";s:3:\"100\";}','','0','','','0','','0','0','0','0')");
?>