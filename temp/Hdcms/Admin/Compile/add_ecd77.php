<?php if(!defined("HDPHP_PATH"))exit;C("SHOW_NOTICE",FALSE);?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
    "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html;charset=UTF-8"/>
    <title>管理员管理</title>
    <script type='text/javascript' src='http://localhost/hdphp/hdphp/../hdjs/jquery-1.8.2.min.js'></script>
<link href='http://localhost/hdphp/hdphp/../hdjs/css/hdjs.css' rel='stylesheet' media='screen'>
<script src='http://localhost/hdphp/hdphp/../hdjs/js/hdjs.js'></script>
<script src='http://localhost/hdphp/hdphp/../hdjs/js/slide.js'></script>
<script src='http://localhost/hdphp/hdphp/../hdjs/org/cal/lhgcalendar.min.js'></script>
<script type='text/javascript'>
		HOST = 'http://localhost';
		ROOT = 'http://localhost/hdcms';
		WEB = 'http://localhost/hdcms/index.php';
		URL = 'http://localhost/hdcms/index.php?a=Admin&c=Admin&m=add';
		HDPHP = 'http://localhost/hdphp/hdphp';
		HDPHPDATA = 'http://localhost/hdphp/hdphp/Data';
		HDPHPTPL = 'http://localhost/hdphp/hdphp/Lib/Tpl';
		HDPHPEXTEND = 'http://localhost/hdphp/hdphp/Extend';
		APP = 'http://localhost/hdcms/index.php?a=Admin';
		CONTROL = 'http://localhost/hdcms/index.php?a=Admin&c=Admin';
		METH = 'http://localhost/hdcms/index.php?a=Admin&c=Admin&m=add';
		GROUP = 'http://localhost/hdcms/hd';
		TPL = 'http://localhost/hdcms/hd/Hdcms/Admin/Tpl';
		CONTROLTPL = 'http://localhost/hdcms/hd/Hdcms/Admin/Tpl/Admin';
		STATIC = 'http://localhost/hdcms/Static';
		PUBLIC = 'http://localhost/hdcms/hd/Hdcms/Admin/Tpl/Public';
</script>
    <link href="http://localhost/hdphp/hdphp/Extend/Org/bootstrap/css/bootstrap.min.css" rel="stylesheet" media="screen"><script src="http://localhost/hdphp/hdphp/Extend/Org/bootstrap/js/bootstrap.min.js"></script>
  <!--[if lte IE 6]>
  <link rel="stylesheet" type="text/css" href="http://localhost/hdphp/hdphp/Extend/Org/bootstrap/ie6/css/bootstrap-ie6.css">
  <![endif]-->
  <!--[if lte IE 7]>
  <link rel="stylesheet" type="text/css" href="http://localhost/hdphp/hdphp/Extend/Org/bootstrap/ie6/css/ie.css">
  <![endif]-->
    <script type="text/javascript" src="http://localhost/hdcms/hd/static/js/js.js"></script>
    <script type="text/javascript" src="http://localhost/hdcms/hd/Hdcms/Admin/Tpl/Admin/js/add_validation.js"></script>
    <script type="text/javascript" src="http://localhost/hdcms/hd/Hdcms/Admin/Tpl/Admin/js/js.js"></script>
    <link type="text/css" rel="stylesheet" href="http://localhost/hdcms/hd/Hdcms/Admin/Tpl/Admin/css/css.css"/>
</head>
<body>
<div class="wrap">
    <div class="menu_list">
        <ul>
            <li><a href="<?php echo U('index');?>">管理员</a></li>
            <li><a href="javascript:;" class="action">添加管理员</a></li>
        </ul>
    </div>
    <div class="title-header">管理员信息</div>
    <form action="<?php echo U('add');?>" method="post" class="form-inline hd-form" onsubmit="return hd_dialog(this,'http://localhost/hdcms/index.php?a=Admin&c=Admin')">
        <table class="table1">
            <tr>
                <th class="w100">管理员名称</th>
                <td>
                    <input type="text" name="username" class="w200"/>
                </td>
            </tr>
            <tr>
                <th class="w100">所属角色</th>
                <td>
                    <select name="rid">
                        <?php $hd["list"]["r"]["total"]=0;if(isset($role) && !empty($role)):$_id_r=0;$_index_r=0;$lastr=min(1000,count($role));
$hd["list"]["r"]["first"]=true;
$hd["list"]["r"]["last"]=false;
$_total_r=ceil($lastr/1);$hd["list"]["r"]["total"]=$_total_r;
$_data_r = array_slice($role,0,$lastr);
if(count($_data_r)==0):echo "";
else:
foreach($_data_r as $key=>$r):
if(($_id_r)%1==0):$_id_r++;else:$_id_r++;continue;endif;
$hd["list"]["r"]["index"]=++$_index_r;
if($_index_r>=$_total_r):$hd["list"]["r"]["last"]=true;endif;?>

                            <option value="<?php echo $r['rid'];?>"><?php echo $r['rname'];?></option>
                        <?php $hd["list"]["r"]["first"]=false;
endforeach;
endif;
else:
echo "";
endif;?>
                    </select>
                </td>
            </tr>
            <tr>
                <th class="w100">密码</th>
                <td>
                    <input type="password" name="password" class="w200"/>
                </td>
            </tr>
            <tr>
                <th class="w100">确认密码</th>
                <td>
                    <input type="password" name="c_password" class="w200"/>
                </td>
            </tr>
            <tr>
                <th class="w100">真实名称</th>
                <td>
                    <input type="text" name="realname" class="w200"/>
                </td>
            </tr>
            <tr>
                <th class="w100">邮箱</th>
                <td>
                    <input type="text" name="email" class="w200"/>
                </td>
            </tr>
        </table>
        <div class="position-bottom">
            <input type="submit" class="hd-success" value="确定"/>
            <input type="button" class="hd-cancel" value="取消" onclick="location.href='http://localhost/hdcms/index.php?a=Admin&c=Admin'"/>
        </div>
    </form>
</div>
</body>
</html>