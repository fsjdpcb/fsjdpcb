<include file="__PUBLIC__/header.php"/>
<body>
<div class="wrap">
    <div class="menu_list">
        <ul>
            <li><a href="{|U:'index'}" class="action">会员组列表</a></li>
            <li><a href="{|U:'add'}">添加会员组</a></li>
             <li><a href="javascript:;" onclick="hd_ajax('{|U:updateCache}')">更新缓存</a></li>
        </ul>
    </div>
    <table class="table2 hd-form">
        <thead>
        <tr>
            <td class="w30">rid</td>
            <td>会员组名</td>
            <td class="w150">系统组</td>
            <td class="w150">积分小于</td>
            <td class="w150">评论不需要审核</td>
            <td class="w150">允许发短消息</td>
            <td class="w100">操作</td>
        </tr>
        </thead>
        <list from="$data" name="d">
            <tr>
                <td>{$d.rid}</td>
                <td>
                    {$d.rname}
                </td>
                <td>
                    <if value="$d.system">
                        <font color="red">√</font>
                        <else/>
                       <font color="blue">×</font>
                    </if>
                </td>
                <td>{$d.creditslower}</td>

                <td>
                    <if value="$d.comment_state">
                        <font color="red">√</font>
                        <else/>
                        ×
                    </if>
                </td>
                <td><if value="$d.allowsendmessage">
                        <font color="red">√</font>
                        <else/>
                        ×
                    </if></td>
                <td>
                    <a href="{|U:'edit',array('rid'=>$d['rid'])}">修改</a>
                    <span class="line">|</span>
                    <if value="$d.system eq 1">
                    	<span>删除</span>
                    <else>
                        <a href="javascript:hd_confirm('确定删除吗？',function(){hd_ajax('{|U:'del'}',{'rid':{$d['rid']}})})">删除</a>
                    </if>
                </td>
            </tr>
        </list>
    </table>
    <div class="h60"></div>
</div>
</body>
</html>