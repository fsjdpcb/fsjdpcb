<?php if(!defined("HDPHP_PATH"))exit;C("SHOW_NOTICE",FALSE);?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
    "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html;charset=UTF-8"/>
    <title>HDCMS - 后台管理中心</title>
    <script type='text/javascript' src='http://localhost/hdcms/hd/hdphp/hdphp/../hdjs/jquery-1.8.2.min.js'></script>
<link href='http://localhost/hdcms/hd/hdphp/hdphp/../hdjs/css/hdjs.css' rel='stylesheet' media='screen'>
<script src='http://localhost/hdcms/hd/hdphp/hdphp/../hdjs/js/hdjs.js'></script>
<script src='http://localhost/hdcms/hd/hdphp/hdphp/../hdjs/js/slide.js'></script>
<script src='http://localhost/hdcms/hd/hdphp/hdphp/../hdjs/org/cal/lhgcalendar.min.js'></script>
<script type='text/javascript'>
		HOST = 'http://localhost';
		ROOT = 'http://localhost/hdcms';
		WEB = 'http://localhost/hdcms/index.php';
		URL = 'http://localhost/hdcms/index.php?a=Hdcms&c=Index&m=index';
		HDPHP = 'http://localhost/hdcms/hd/hdphp/hdphp';
		HDPHPDATA = 'http://localhost/hdcms/hd/hdphp/hdphp/Data';
		HDPHPTPL = 'http://localhost/hdcms/hd/hdphp/hdphp/Lib/Tpl';
		HDPHPEXTEND = 'http://localhost/hdcms/hd/hdphp/hdphp/Extend';
		APP = 'http://localhost/hdcms/index.php?a=Hdcms';
		CONTROL = 'http://localhost/hdcms/index.php?a=Hdcms&c=Index';
		METH = 'http://localhost/hdcms/index.php?a=Hdcms&c=Index&m=index';
		GROUP = 'http://localhost/hdcms/hd';
		TPL = 'http://localhost/hdcms/hd/Hdcms/Hdcms/Tpl';
		CONTROLTPL = 'http://localhost/hdcms/hd/Hdcms/Hdcms/Tpl/Index';
		STATIC = 'http://localhost/hdcms/Static';
		PUBLIC = 'http://localhost/hdcms/hd/Hdcms/Hdcms/Tpl/Public';
</script>
    <link type="text/css" rel="stylesheet" href="http://localhost/hdcms/hd/Hdcms/Hdcms/Tpl/Index/css/css.css"/>
    <script type="text/javascript" src="http://localhost/hdcms/hd/Hdcms/Hdcms/Tpl/Index/js/menu.js"></script>
</head>
<body>
<div class="nav">
    <!--头部左侧导航-->
    <div class="top_menu">
        <a href="javascript:" onclick="get_left_menu(this,0);" class="top_menu">常用</a>
        <?php $hd["list"]["m"]["total"]=0;if(isset($top_menu) && !empty($top_menu)):$_id_m=0;$_index_m=0;$lastm=min(1000,count($top_menu));
$hd["list"]["m"]["first"]=true;
$hd["list"]["m"]["last"]=false;
$_total_m=ceil($lastm/1);$hd["list"]["m"]["total"]=$_total_m;
$_data_m = array_slice($top_menu,0,$lastm);
if(count($_data_m)==0):echo "";
else:
foreach($_data_m as $key=>$m):
if(($_id_m)%1==0):$_id_m++;else:$_id_m++;continue;endif;
$hd["list"]["m"]["index"]=++$_index_m;
if($_index_m>=$_total_m):$hd["list"]["m"]["last"]=true;endif;?>

            <a href="javascript:" onclick="get_left_menu(this,<?php echo $m['nid'];?>);" class="top_menu"><?php echo $m['title'];?></a>
        <?php $hd["list"]["m"]["first"]=false;
endforeach;
endif;
else:
echo "";
endif;?>
    </div>
    <!--头部左侧导航-->
    <!--头部右侧导航-->
    <div class="r_menu">
        <?php echo $_SESSION['rname'];?> : admin <a href="<?php echo U('Login/out');?>" target="_self">[退出]</a><span>|</span>
        <a href="javascript:hd_ajax('<?php echo U('Cache/Cache/update_all');?>');">更新全站缓存</a><span>|</span>
        <a href="http://localhost/hdcms/index.php" target="_blank">前台首页</a>
        <!--        <span>|</span>-->
        <!--        <a href="<?php echo U('Member/Index/index');?>" target="_blank">会员中心</a></a>-->
        <!--        <span>|</span>-->
        <!--        <a href="http://localhost/hdcms" target="_blank">后台地图</a><span>|</span>-->
        <!--        <a href="http://localhost/hdcms" target="_blank">更新缓存</a>-->
    </div>
    <!--头部右侧导航-->
</div>
<!--左侧导航-->
<div class="main">
    <!--主体左侧导航-->
    <div class="left_menu">
        <div class="nid_0">
            <dl>
                <dt>常用</dt>
                <dd>
                    <a url="?a=Menu&c=Menu&m=set_favorite" onclick="get_content(this,90001)" href="javascript:;"
                       nid="90001">设置</a>
                </dd>
                <dd>
                    <a url="?a=Bug&c=Bug&m=feedback" onclick="get_content(this,90002)" href="javascript:;"
                       nid="90002">反馈Bug</a>
                </dd>
                <dd>
                    <a url="?a=Bug&c=Bug&m=showBug" onclick="get_content(this,90003)" href="javascript:;" nid="90003">Bug管理</a>
                </dd>
                <?php $hd["list"]["f"]["total"]=0;if(isset($favorite_menu) && !empty($favorite_menu)):$_id_f=0;$_index_f=0;$lastf=min(1000,count($favorite_menu));
$hd["list"]["f"]["first"]=true;
$hd["list"]["f"]["last"]=false;
$_total_f=ceil($lastf/1);$hd["list"]["f"]["total"]=$_total_f;
$_data_f = array_slice($favorite_menu,0,$lastf);
if(count($_data_f)==0):echo "";
else:
foreach($_data_f as $key=>$f):
if(($_id_f)%1==0):$_id_f++;else:$_id_f++;continue;endif;
$hd["list"]["f"]["index"]=++$_index_f;
if($_index_f>=$_total_f):$hd["list"]["f"]["last"]=true;endif;?>

                    <dd>
                        <a url="?a=<?php echo $f['app'];?>&c=<?php echo $f['control'];?>&m=<?php echo $f['method'];?>&nid=<?php echo $f['nid'];?>"
                           onclick="get_content(this,<?php echo $f['nid'];?>)" href="javascript:;" nid="<?php echo $f['nid'];?>"><?php echo $f['title'];?></a>
                    </dd>
                <?php $hd["list"]["f"]["first"]=false;
endforeach;
endif;
else:
echo "";
endif;?>
            </dl>
        </div>

    </div>
    <!--主体左侧导航-->
    <!--内容显示区域-->
    <div class="menu_nav">
        <div class="direction">
            <a href="#" class="left">向左</a>
            <a href="#" class="right">向右</a>
        </div>
        <div class="favorite_menu">
            <ul>
                <li class="action" nid="0"><a href="javascript:;" class="menu" nid="0">环境</a></li>
            </ul>
        </div>
    </div>
    <div class="top_content">
        <iframe src="<?php echo U('feedback');?>" nid="0" scrolling="auto" frameborder="0" style="height: 100%;width: 100%;"></iframe>

    </div>
    <!--内容显示区域-->
</div>
<!--左侧导航-->
</body>
</html>