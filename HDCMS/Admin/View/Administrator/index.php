<include file="__PUBLIC__/header.php"/>
<body>
<div class="wrap">
    <div class="menu_list">
        <ul>
            <li><a href="{|U:'index'}" class="action">管理员</a></li>
            <li><a href="{|U:'add'}">添加管理员</a></li>
        </ul>
    </div>
    <table class="table2">
        <thead>
        <tr>
            <td width="30">aid</td>
            <td>用户名</td>
            <td>所属角色</td>
            <td>登录IP</td>
            <td>登录时间</td>
            <td>昵称</td>
            <td>邮箱</td>
            <td width="100">操作</td>
        </tr>
        </thead>
        <tbody>
        <list from="$data" name="a">
            <tr>
                <td width="30">{$a.uid}</td>
                <td>{$a.username}</td>
                <td>{$a.rname}</td>
                <td>{$a.ip}</td>
                <td>{$a.logintime|date:'Y-m-d H:i',@@}</td>
                <td>{$a.nickname}</td>
                <td>{$a.email}</td>
                <td>
                    <a href="{|U:'edit',array('uid'=>$a['uid'])}">修改</a> |
                    <if value="C('WEB_MASTER') eq $a['username']">
                        删除
                    <else>
                        <a href="javascript:hd_confirm('确定删除管理员吗?',function(){hd_ajax('{|U:'del'}',{'uid':{$a.uid}})})">删除</a>
                    </if>
                </td>
            </tr>
        </list>
        </tbody>
    </table>
</div>
</body>
</html>