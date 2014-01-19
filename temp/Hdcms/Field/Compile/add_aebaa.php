<?php if(!defined("HDPHP_PATH"))exit;C("SHOW_NOTICE",FALSE);?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
    "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html;charset=UTF-8"/>
    <title>添加字段</title>
    <script type='text/javascript' src='http://localhost/hdphp/hdphp/../hdjs/jquery-1.8.2.min.js'></script>
<link href='http://localhost/hdphp/hdphp/../hdjs/css/hdjs.css' rel='stylesheet' media='screen'>
<script src='http://localhost/hdphp/hdphp/../hdjs/js/hdjs.js'></script>
<script src='http://localhost/hdphp/hdphp/../hdjs/js/slide.js'></script>
<script src='http://localhost/hdphp/hdphp/../hdjs/org/cal/lhgcalendar.min.js'></script>
<script type='text/javascript'>
		HOST = 'http://localhost';
		ROOT = 'http://localhost/hdcms';
		WEB = 'http://localhost/hdcms/index.php';
		URL = 'http://localhost/hdcms/index.php?a=Field&c=Field&m=add&mid=2';
		HDPHP = 'http://localhost/hdphp/hdphp';
		HDPHPDATA = 'http://localhost/hdphp/hdphp/Data';
		HDPHPTPL = 'http://localhost/hdphp/hdphp/Lib/Tpl';
		HDPHPEXTEND = 'http://localhost/hdphp/hdphp/Extend';
		APP = 'http://localhost/hdcms/index.php?a=Field';
		CONTROL = 'http://localhost/hdcms/index.php?a=Field&c=Field';
		METH = 'http://localhost/hdcms/index.php?a=Field&c=Field&m=add';
		GROUP = 'http://localhost/hdcms/hd';
		TPL = 'http://localhost/hdcms/hd/Hdcms/Field/Tpl';
		CONTROLTPL = 'http://localhost/hdcms/hd/Hdcms/Field/Tpl/Field';
		STATIC = 'http://localhost/hdcms/Static';
		PUBLIC = 'http://localhost/hdcms/hd/Hdcms/Field/Tpl/Public';
</script>
    <link type="text/css" rel="stylesheet" href="http://localhost/hdcms/hd/Hdcms/Field/Tpl/Field/css/css.css"/>
    <script type="text/javascript" src="http://localhost/hdcms/hd/Hdcms/Field/Tpl/Field/js/js.js"></script>
    <script type="text/javascript">
        var mid = '<?php echo $_GET['mid'];?>';
        //获得字段模板类型
        var tpl_type = "add";
    </script>
</head>
<body>
<form action="http://localhost/hdcms/index.php?a=Field&c=Field&m=add" method="post" onsubmit="return hd_submit(this,'<?php echo U(index,array('mid'=>$_GET['mid']));?>');"
      class="hd-form">
    <div class="wrap">
        <div class="menu_list">
            <ul>
                <li><a href="<?php echo U('Model/Model/index');?>">模型列表</a></li>
                <li><a href="<?php echo U('index',array('mid'=>$_GET['mid']));?>">字段列表</a></li>
                <li><a href="javascript:;" class="action">添加字段</a></li>
            </ul>
        </div>
        <div class="title-header">
            添加字段
        </div>
        <input type="hidden" name="mid" value="<?php echo $model['mid'];?>"/>
        <table class="table1">
            <tr>
                <th class="w100">模型</th>
                <td>
                    <input type="text" disabled="disabled" value="<?php echo $model['model_name'];?>"/>
                </td>
            </tr>
            <tr>
                <th>类型</th>
                <td>
                    <select id="field_type" name="show_type">
                        <option value="input">单行文本</option>
                        <option value="textarea">多行文本</option>
                        <option value="number">数字</option>
                        <option value="select">选项</option>
                        <option value="editor">编辑器</option>
                        <option value="image">图片</option>
                        <option value="images">多图片</option>
                        <option value="date">日期与时间</option>
                    </select>
                </td>
            </tr>
            <?php if($model['type']==1){?>
                <tr>
                    <th>表</th>
                    <td>
                        <label><input type="radio" name="table_type" value="1"/> 主表</label>
                        <label><input type="radio" name="table_type" value="2" checked="checked"/> 附表</label>
                    </td>
                </tr>
                <?php  }else{ ?>
                    <input type="hidden" name="is_main_table" value="1"/>
            <?php }?>

            <tr>
                <th>
                    字段标题<span class="star">*</span>
                </th>
                <td>
                    <input type="text" name="title" class="w200"/>
                </td>
            </tr>
            <tr>
                <th>
                    字段名<span class="star">*</span>
                </th>
                <td>
                    <input type="text" name="field_name" class="w200"/>
                </td>
            </tr>
            <tr>
                <th>输入提示</th>
                <td>
                    <input type="text" name="set[message]" class="w200"/>
                </td>
            </tr>
        </table>
        <div class="field_tpl">

        </div>
        <table class="table1">
            <tr>
                <th class="w100">
                    会员中心显示
                </th>
                <td>
                    <label><input type="radio" name="ismember" value="1" checked="checked"/> 是</label>
                    <label><input type="radio" name="ismember" value="0"/> 否</label>
                </td>
            </tr>
        </table>
        <div class="position-bottom">
            <input type="submit" value="确定" class="hd-success"/>
        </div>
    </div>
</form>
</body>
</html>