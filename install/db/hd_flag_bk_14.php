<?php if(!defined('HDPHP_PATH'))EXIT;
$db->exe("REPLACE INTO ".$db_prefix."flag (`fid`,`flagname`,`system`) VALUES('1','热门','1')");
$db->exe("REPLACE INTO ".$db_prefix."flag (`fid`,`flagname`,`system`) VALUES('2','置顶','1')");
$db->exe("REPLACE INTO ".$db_prefix."flag (`fid`,`flagname`,`system`) VALUES('3','推荐','1')");
$db->exe("REPLACE INTO ".$db_prefix."flag (`fid`,`flagname`,`system`) VALUES('4','图片','1')");
$db->exe("REPLACE INTO ".$db_prefix."flag (`fid`,`flagname`,`system`) VALUES('5','幻灯片','1')");
$db->exe("REPLACE INTO ".$db_prefix."flag (`fid`,`flagname`,`system`) VALUES('6','精华','0')");
$db->exe("REPLACE INTO ".$db_prefix."flag (`fid`,`flagname`,`system`) VALUES('7','置顶','0')");
$db->exe("REPLACE INTO ".$db_prefix."flag (`fid`,`flagname`,`system`) VALUES('8','站长推荐','0')");
