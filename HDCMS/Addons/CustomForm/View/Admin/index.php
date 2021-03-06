<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>表单列表</title>
    <hdjs/>
    <style type="text/css">
        div.hd-search {
            padding: 10px;
        }

        div.hd-search td {
            padding-right: 5px;
        }
    </style>
</head>
<body>
<div class="wrap">
    <div class="menu_list">
        <ul>
            <li>
                <a href="{|U:'Admin/index'}" class="action">
                    表单列表
                </a>
            </li>
            <li>
                <a href="{|U:'FormGroup/index'}">
                    表单组列表
                </a>
            </li>
            <li>
                <a href="{|U:'FormGroup/add'}">
                    添加表单组
                </a>
            </li>
        </ul>
    </div>
    <div class="hd-search" id="search">
        <table>
            <tr>
                <td>表单组:</td>
                <td>
                    <select name="gid">
                        <list from="$group" name="g">
                            <option value="{$g.gid}" <if value="$hd.get.gid eq $g.gid">selected=""</if>>{$g.gname}</option>
                        </list>
                    </select>
                </td>
                <td>审核:</td>
                <td>
                    <select name="status">
                        <option value="1" <if value="$hd.get.status eq 1">selected=""</if>>已审核</option>
                        <option value="0" <if value="$hd.get.status eq 0">selected=""</if>>未审核</option>
                    </select>
                </td>
            </tr>
        </table>
    </div>
    <div class="content">
        <table class="table2 table-title">
            <thead>
            <tr>
                <td class="w30">id</td>
                <td>会员</td>
                <td>提交时间</td>
                <td class="w200">表单组</td>
                <td class="w200">审核</td>
                <td class="w100">操作</td>
            </tr>
            </thead>
            <tbody>
            <list from="$data.data" name="d">
                <tr>
                    <td>{$d.id}</td>
                    <td>{$d.username}</td>
                    <td>
                        {$d.addtime|date:'Y-m-d H:i',@@}
                    </td>
                    <td>{$d.gname}</td>
                    <td>
                        <if value="{$d.status}">
                            <font color="red">√</font>
                            <else>
                                <font color="blue">×</font>
                        </if>
                    </td>
                    <td>
                        <a href="{|U:showForm,array('id'=>$d['id'])}">查看<a> |
                                <a href="javascript:hd_confirm('确证删除吗？',function(){hd_ajax(CONTROLLER + '&g=addons&a=del', {id: {$d.id}})})">删除</a>
                    </td>
                </tr>
            </list>
            </tbody>
        </table>
    </div>
</div>
<script>
    $('#search select').change(function () {
        var gid = $("[name=gid]").val();
        var status = $("[name=status]").val();
        var url = "{|U:'index'}&gid=" + gid + "&status=" + status;
        location.href=url;
    })
</script>
</body>
</html>