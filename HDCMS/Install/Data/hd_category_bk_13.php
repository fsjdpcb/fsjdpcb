<?php if(!defined('HDPHP_PATH'))EXIT;
$db->exe("REPLACE INTO ".$db_prefix."category (`cid`,`pid`,`catname`,`catimage`,`catdir`,`cat_keyworks`,`cat_description`,`index_tpl`,`list_tpl`,`arc_tpl`,`cat_html_url`,`arc_html_url`,`mid`,`cattype`,`arc_url_type`,`cat_url_type`,`cat_redirecturl`,`catorder`,`cat_show`,`cat_seo_title`,`cat_seo_description`,`add_reward`,`show_credits`,`repeat_charge_day`,`allow_user_set_credits`,`member_send_status`,`priv_child`)
						VALUES(1,0,'案例','upload/content/2014/09/23/58091411405414.jpg','case','','提交案例，可以让更多的人知道你的网站!','anli_index.html','anli_list.html','anli_default.html','{catdir}/{cid}{page}.html','{catdir}/{y}/{m}{d}/{aid}.html',1,2,2,2,'',100,1,'提交案例','',1,0,1,1,0,1)");
$db->exe("REPLACE INTO ".$db_prefix."category (`cid`,`pid`,`catname`,`catimage`,`catdir`,`cat_keyworks`,`cat_description`,`index_tpl`,`list_tpl`,`arc_tpl`,`cat_html_url`,`arc_html_url`,`mid`,`cattype`,`arc_url_type`,`cat_url_type`,`cat_redirecturl`,`catorder`,`cat_show`,`cat_seo_title`,`cat_seo_description`,`add_reward`,`show_credits`,`repeat_charge_day`,`allow_user_set_credits`,`member_send_status`,`priv_child`)
						VALUES(2,0,'模板','','template','','所有模板免费使用，可以用在任何商业用途！','moban_index.html','moban_list.html','moban_default.html','{catdir}/{cid}{page}.html','{catdir}/{y}/{m}{d}/{aid}.html',2,2,2,2,'',100,1,'提交模板','',1,0,1,1,0,0)");
$db->exe("REPLACE INTO ".$db_prefix."category (`cid`,`pid`,`catname`,`catimage`,`catdir`,`cat_keyworks`,`cat_description`,`index_tpl`,`list_tpl`,`arc_tpl`,`cat_html_url`,`arc_html_url`,`mid`,`cattype`,`arc_url_type`,`cat_url_type`,`cat_redirecturl`,`catorder`,`cat_show`,`cat_seo_title`,`cat_seo_description`,`add_reward`,`show_credits`,`repeat_charge_day`,`allow_user_set_credits`,`member_send_status`,`priv_child`)
						VALUES(3,0,'扩展','','addon','','所在插件与模块均免费使用！','cajian_index.html','cajian_list.html','cajian_default.html','{catdir}/{cid}{page}.html','{catdir}/{y}/{m}{d}/{aid}.html',2,2,2,2,'',100,1,'','',1,0,1,1,0,0)");
$db->exe("REPLACE INTO ".$db_prefix."category (`cid`,`pid`,`catname`,`catimage`,`catdir`,`cat_keyworks`,`cat_description`,`index_tpl`,`list_tpl`,`arc_tpl`,`cat_html_url`,`arc_html_url`,`mid`,`cattype`,`arc_url_type`,`cat_url_type`,`cat_redirecturl`,`catorder`,`cat_show`,`cat_seo_title`,`cat_seo_description`,`add_reward`,`show_credits`,`repeat_charge_day`,`allow_user_set_credits`,`member_send_status`,`priv_child`)
						VALUES(4,0,'CMS帮助','','hdcms','','使用交流，问题求助社区','article_index.html','article_list.html','article_default.html','{catdir}/{cid}{page}.html','{catdir}/{y}/{m}{d}/{aid}.html',1,2,2,2,'',100,1,'','',1,0,1,1,0,0)");
$db->exe("REPLACE INTO ".$db_prefix."category (`cid`,`pid`,`catname`,`catimage`,`catdir`,`cat_keyworks`,`cat_description`,`index_tpl`,`list_tpl`,`arc_tpl`,`cat_html_url`,`arc_html_url`,`mid`,`cattype`,`arc_url_type`,`cat_url_type`,`cat_redirecturl`,`catorder`,`cat_show`,`cat_seo_title`,`cat_seo_description`,`add_reward`,`show_credits`,`repeat_charge_day`,`allow_user_set_credits`,`member_send_status`,`priv_child`)
						VALUES(6,4,'标签使用','','help/tag','','','article_index.html','article_list.html','article_default.html','{catdir}/{cid}{page}.html','{catdir}/{y}/{m}{d}/{aid}.html',1,1,2,2,'',2,1,'','',1,0,1,1,0,0)");
$db->exe("REPLACE INTO ".$db_prefix."category (`cid`,`pid`,`catname`,`catimage`,`catdir`,`cat_keyworks`,`cat_description`,`index_tpl`,`list_tpl`,`arc_tpl`,`cat_html_url`,`arc_html_url`,`mid`,`cattype`,`arc_url_type`,`cat_url_type`,`cat_redirecturl`,`catorder`,`cat_show`,`cat_seo_title`,`cat_seo_description`,`add_reward`,`show_credits`,`repeat_charge_day`,`allow_user_set_credits`,`member_send_status`,`priv_child`)
						VALUES(7,4,'安装使用','','help/setup','','','article_index.html','article_list.html','article_default.html','{catdir}/{cid}{page}.html','{catdir}/{y}/{m}{d}/{aid}.html',1,1,2,2,'',1,1,'','',1,0,1,1,0,0)");
$db->exe("REPLACE INTO ".$db_prefix."category (`cid`,`pid`,`catname`,`catimage`,`catdir`,`cat_keyworks`,`cat_description`,`index_tpl`,`list_tpl`,`arc_tpl`,`cat_html_url`,`arc_html_url`,`mid`,`cattype`,`arc_url_type`,`cat_url_type`,`cat_redirecturl`,`catorder`,`cat_show`,`cat_seo_title`,`cat_seo_description`,`add_reward`,`show_credits`,`repeat_charge_day`,`allow_user_set_credits`,`member_send_status`,`priv_child`)
						VALUES(8,4,'模块插件','','help/addon','','','article_index.html','article_list.html','article_default.html','{catdir}/{cid}{page}.html','{catdir}/{y}/{m}{d}/{aid}.html',1,1,2,2,'',3,1,'','',1,0,1,1,0,0)");
$db->exe("REPLACE INTO ".$db_prefix."category (`cid`,`pid`,`catname`,`catimage`,`catdir`,`cat_keyworks`,`cat_description`,`index_tpl`,`list_tpl`,`arc_tpl`,`cat_html_url`,`arc_html_url`,`mid`,`cattype`,`arc_url_type`,`cat_url_type`,`cat_redirecturl`,`catorder`,`cat_show`,`cat_seo_title`,`cat_seo_description`,`add_reward`,`show_credits`,`repeat_charge_day`,`allow_user_set_credits`,`member_send_status`,`priv_child`)
						VALUES(9,0,'框架帮助','upload/26751412774521.jpg','hdphp','','','article_index.html','article_list.html','article_default.html','{catdir}/{cid}{page}.html','{catdir}/{y}/{m}{d}/{aid}.html',1,2,2,2,'',100,1,'','',1,0,1,1,0,0)");
$db->exe("REPLACE INTO ".$db_prefix."category (`cid`,`pid`,`catname`,`catimage`,`catdir`,`cat_keyworks`,`cat_description`,`index_tpl`,`list_tpl`,`arc_tpl`,`cat_html_url`,`arc_html_url`,`mid`,`cattype`,`arc_url_type`,`cat_url_type`,`cat_redirecturl`,`catorder`,`cat_show`,`cat_seo_title`,`cat_seo_description`,`add_reward`,`show_credits`,`repeat_charge_day`,`allow_user_set_credits`,`member_send_status`,`priv_child`)
						VALUES(10,9,'模板标签','','hdphp/tag','','','article_index.html','article_list.html','article_default.html','{catdir}/{cid}{page}.html','{catdir}/{y}/{m}{d}/{aid}.html',1,1,2,2,'',2,1,'','',1,0,1,1,0,0)");
$db->exe("REPLACE INTO ".$db_prefix."category (`cid`,`pid`,`catname`,`catimage`,`catdir`,`cat_keyworks`,`cat_description`,`index_tpl`,`list_tpl`,`arc_tpl`,`cat_html_url`,`arc_html_url`,`mid`,`cattype`,`arc_url_type`,`cat_url_type`,`cat_redirecturl`,`catorder`,`cat_show`,`cat_seo_title`,`cat_seo_description`,`add_reward`,`show_credits`,`repeat_charge_day`,`allow_user_set_credits`,`member_send_status`,`priv_child`)
						VALUES(11,9,'起步知识','','hdphp/base','','','article_index.html','article_list.html','article_default.html','{catdir}/{cid}{page}.html','{catdir}/{y}/{m}{d}/{aid}.html',1,1,2,2,'',1,1,'','',1,0,1,1,0,0)");
$db->exe("REPLACE INTO ".$db_prefix."category (`cid`,`pid`,`catname`,`catimage`,`catdir`,`cat_keyworks`,`cat_description`,`index_tpl`,`list_tpl`,`arc_tpl`,`cat_html_url`,`arc_html_url`,`mid`,`cattype`,`arc_url_type`,`cat_url_type`,`cat_redirecturl`,`catorder`,`cat_show`,`cat_seo_title`,`cat_seo_description`,`add_reward`,`show_credits`,`repeat_charge_day`,`allow_user_set_credits`,`member_send_status`,`priv_child`)
						VALUES(12,9,'数据模型','','hdphp/model','','','article_index.html','article_list.html','article_default.html','{catdir}/{cid}{page}.html','{catdir}/{y}/{m}{d}/{aid}.html',1,1,2,2,'',100,1,'','',1,0,1,1,0,0)");
$db->exe("REPLACE INTO ".$db_prefix."category (`cid`,`pid`,`catname`,`catimage`,`catdir`,`cat_keyworks`,`cat_description`,`index_tpl`,`list_tpl`,`arc_tpl`,`cat_html_url`,`arc_html_url`,`mid`,`cattype`,`arc_url_type`,`cat_url_type`,`cat_redirecturl`,`catorder`,`cat_show`,`cat_seo_title`,`cat_seo_description`,`add_reward`,`show_credits`,`repeat_charge_day`,`allow_user_set_credits`,`member_send_status`,`priv_child`)
						VALUES(13,3,'模块','','addon/module','','所有模块免费使用！','cajian_index.html','cajian_list.html','cajian_default.html','{catdir}/{cid}{page}.html','{catdir}/{y}/{m}{d}/{aid}.html',2,1,2,2,'',100,1,'提交模块','',1,0,1,1,0,0)");
$db->exe("REPLACE INTO ".$db_prefix."category (`cid`,`pid`,`catname`,`catimage`,`catdir`,`cat_keyworks`,`cat_description`,`index_tpl`,`list_tpl`,`arc_tpl`,`cat_html_url`,`arc_html_url`,`mid`,`cattype`,`arc_url_type`,`cat_url_type`,`cat_redirecturl`,`catorder`,`cat_show`,`cat_seo_title`,`cat_seo_description`,`add_reward`,`show_credits`,`repeat_charge_day`,`allow_user_set_credits`,`member_send_status`,`priv_child`)
						VALUES(14,3,'插件','','addon/plugin','','所有插件免费使用！','cajian_index.html','cajian_list.html','article_default.html','{catdir}/{cid}{page}.html','{catdir}/{y}/{m}{d}/{aid}.html',2,1,2,2,'',100,1,'提交插件','',1,0,1,1,0,0)");
$db->exe("REPLACE INTO ".$db_prefix."category (`cid`,`pid`,`catname`,`catimage`,`catdir`,`cat_keyworks`,`cat_description`,`index_tpl`,`list_tpl`,`arc_tpl`,`cat_html_url`,`arc_html_url`,`mid`,`cattype`,`arc_url_type`,`cat_url_type`,`cat_redirecturl`,`catorder`,`cat_show`,`cat_seo_title`,`cat_seo_description`,`add_reward`,`show_credits`,`repeat_charge_day`,`allow_user_set_credits`,`member_send_status`,`priv_child`)
						VALUES(15,1,'企业网站','','case/qiyewangzhan','','提交案例，可以让更多的人知道你的网站!','anli_index.html','anli_list.html','anli_default.html','{catdir}/{cid}{page}.html','{catdir}/{y}/{m}{d}/{aid}.html',1,1,2,2,'',100,1,'提交案例','',0,10,1,1,1,0)");
$db->exe("REPLACE INTO ".$db_prefix."category (`cid`,`pid`,`catname`,`catimage`,`catdir`,`cat_keyworks`,`cat_description`,`index_tpl`,`list_tpl`,`arc_tpl`,`cat_html_url`,`arc_html_url`,`mid`,`cattype`,`arc_url_type`,`cat_url_type`,`cat_redirecturl`,`catorder`,`cat_show`,`cat_seo_title`,`cat_seo_description`,`add_reward`,`show_credits`,`repeat_charge_day`,`allow_user_set_credits`,`member_send_status`,`priv_child`)
						VALUES(16,1,'行业门户','','case/xingyemenhu','','提交案例，可以让更多的人知道你的网站!','anli_index.html','anli_list.html','anli_default.html','{catdir}/{cid}{page}.html','{catdir}/{y}/{m}{d}/{aid}.html',1,1,2,2,'',100,1,'提交案例','',0,0,1,1,0,0)");
$db->exe("REPLACE INTO ".$db_prefix."category (`cid`,`pid`,`catname`,`catimage`,`catdir`,`cat_keyworks`,`cat_description`,`index_tpl`,`list_tpl`,`arc_tpl`,`cat_html_url`,`arc_html_url`,`mid`,`cattype`,`arc_url_type`,`cat_url_type`,`cat_redirecturl`,`catorder`,`cat_show`,`cat_seo_title`,`cat_seo_description`,`add_reward`,`show_credits`,`repeat_charge_day`,`allow_user_set_credits`,`member_send_status`,`priv_child`)
						VALUES(17,2,'企业网站','','template/qiyewangzhan','','','moban_index.html','moban_list.html','moban_default.html','{catdir}/{cid}{page}.html','{catdir}/{y}/{m}{d}/{aid}.html',2,1,2,2,'',100,1,'','',0,0,1,1,0,0)");
$db->exe("REPLACE INTO ".$db_prefix."category (`cid`,`pid`,`catname`,`catimage`,`catdir`,`cat_keyworks`,`cat_description`,`index_tpl`,`list_tpl`,`arc_tpl`,`cat_html_url`,`arc_html_url`,`mid`,`cattype`,`arc_url_type`,`cat_url_type`,`cat_redirecturl`,`catorder`,`cat_show`,`cat_seo_title`,`cat_seo_description`,`add_reward`,`show_credits`,`repeat_charge_day`,`allow_user_set_credits`,`member_send_status`,`priv_child`)
						VALUES(18,2,'行业门户','','template/xingyemenhu','','','moban_index.html','moban_list.html','moban_default.html','{catdir}/{cid}{page}.html','{catdir}/{y}/{m}{d}/{aid}.html',2,1,2,2,'',100,1,'','',0,0,1,1,0,0)");
$db->exe("REPLACE INTO ".$db_prefix."category (`cid`,`pid`,`catname`,`catimage`,`catdir`,`cat_keyworks`,`cat_description`,`index_tpl`,`list_tpl`,`arc_tpl`,`cat_html_url`,`arc_html_url`,`mid`,`cattype`,`arc_url_type`,`cat_url_type`,`cat_redirecturl`,`catorder`,`cat_show`,`cat_seo_title`,`cat_seo_description`,`add_reward`,`show_credits`,`repeat_charge_day`,`allow_user_set_credits`,`member_send_status`,`priv_child`)
						VALUES(19,0,'下载','','download','','','article_index.html','article_list.html','article_default.html','{catdir}/{cid}{page}.html','{catdir}/{y}/{m}{d}/{aid}.html',1,1,2,2,'',100,0,'','',0,0,1,1,0,0)");
