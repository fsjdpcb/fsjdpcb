<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>搜索关键词</title>
    <hdjs/>
    <js file="__CONTROLLER_TPL__/js/manage.js"/>
    <css file="__PUBLIC__/common.css"/>
</head>
<body>
<div class="wrap">
    <div class="menu_list">
        <ul>
            <li><a href="{|U:'index'}" class="action">搜索词列表</a></li>
        </ul>
    </div>
    <table class="table2 hd-form">
        <thead>
        <tr>
            <td class="w30">
                <input type="checkbox" id="select_all"/>
            </td>
            <td class="w30">sid</td>
            <td>关键词</td>
            <td class="w100">搜索次数</td>
            <td class="w80">操作</td>
        </tr>
        </thead>
        <list from="$data" name="d">
            <tr>
                <td><input type="checkbox" name="sid[]" value="{$d.sid}"/></td>
                <td>{$d.sid}</td>
                <td>
                    <a href="{|U:edit,array('sid'=>$d['sid'])}">{$d.word}</a>
                </td>
                <td>
                    {$d.total}
                </td>
                <td>
                    <a href="{|U:edit,array('sid'=>$d['sid'])}">编辑</a>
                    <span class="line">|</span>
                    <a href="javascript:;" onclick="del({$d.sid})">删除</a>
                </td>
            </tr>
        </list>
    </table>
    <div class="page1">
        {$page}
    </div>
</div>

<div class="position-bottom">
    <input type="button" class="hd-cancel-small s_all" value="全选" onclick="select_all('.hd-form')"/>
    <input type="button" class="hd-cancel-small r_select" value="反选" onclick="reverse_select('.hd-form')"/>
    <input type="button" class="hd-cancel-small" onclick="del()" value="批量删除"/>
</div>
</body>
</html>