<?php if(!defined('HDPHP_PATH'))EXIT;
$db->exe("REPLACE INTO ".$db_prefix."user (`uid`,`nickname`,`username`,`password`,`code`,`email`,`regtime`,`logintime`,`regip`,`lastip`,`state`,`lock_end_time`,`qq`,`sex`,`favicon`,`credits`,`rid`,`allow_user_set_credits`,`signature`,`domain`,`spec_num`) VALUES('1','admin','admin','e34ec5a8684254ee61c4670998d0eebe','8f9a88933b','houdunwangxj@gmail.com','1397452628','1398011180','101.38.68.62','0.0.0.0','1','0','','1','','10008','1','1','后盾网  人人做后盾','1','286')");