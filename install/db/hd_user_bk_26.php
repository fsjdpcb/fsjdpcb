<?php if(!defined('HDPHP_PATH'))EXIT;
$db->exe("REPLACE INTO ".$db_prefix."user (`uid`,`username`,`password`,`email`,`logintime`,`ip`,`realname`,`status`,`qq`,`sex`,`favicon`,`credits`,`rid`,`gid`) VALUES('1','admin','7fef6171469e80d32c0559f88b377245','','1390551189','127.0.0.1','','1','','1','','0','1','1')");
