<?php if(!defined('HDPHP_PATH'))EXIT;
$db->exe("REPLACE INTO ".$db_prefix."favorite (`fid`,`user_id`,`mid`,`cid`,`aid`,`title`)
						VALUES('1','1','1','51','13','11')");
$db->exe("REPLACE INTO ".$db_prefix."favorite (`fid`,`user_id`,`mid`,`cid`,`aid`,`title`)
						VALUES('2','1','2','54','1','aa')");
