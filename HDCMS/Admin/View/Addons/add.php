<include file="__PUBLIC__/header.php"/>
<body>
<!--onsubmit="return hd_submit(this,'{|U:index}')"-->
<form class="hd-form" method="post">
    <div class="wrap">
        <div class="menu_list">
            <ul>
                <li>
                    <a href="{|U:'index'}">插件列表</a>
                </li>
                <li>
                    <a href="{|U:'add'}" class="action">创建插件</a>
                </li>
            </ul>
        </div>

        <div class="title-header">
            创建插件
        </div>
        <table class="table1">
            <tr>
                <th class="w100">标识名</th>
                <td>
                    <input type="text" name="name" class="w200" value="Example"/>
                </td>
            </tr>
            <tr>
                <th class="w100">插件名</th>
                <td>
                    <input type="text" name="title" class="w200" value="示例"/>
                </td>
            </tr>
            <tr>
                <th class="w100">版本</th>
                <td>
                    <input type="text" name="version" class="w200" value="1.0"/>
                </td>
            </tr>
            <tr>
                <th class="w100">作者</th>
                <td>
                    <input type="text" name="author" class="w200" value="无名"/>
                </td>
            </tr>

            <tr>
                <th class="w100">描述</th>
                <td>
                    <textarea name="description" class="w300 h100">这是一个临时描述</textarea>
                </td>
            </tr>
            <tr>
                <th>插件是否有后台</th>
                <td>
                    <label><input type="checkbox" name="has_adminlist" value="1" checked=""/> 有</label>
                    <span id="hd_has_adminlist"></span>
                </td>
            </tr>
            <tr>
                <th>开启外部访问</th>
                <td>
                    <label><input type="checkbox" name="has_outurl" value="1" checked=""/> 开启</label>
                    <span id="hd_has_outurl"></span>
                </td>
            </tr>
            <tr>
                <th>是否需要配置</th>
                <td>
                    <label><input type="checkbox" name="config" value="1" checked=""/> 需要</label>
                </td>
            </tr>
            <tr>
                <th>是否需要模板标签</th>
                <td>
                    <label><input type="checkbox" name="viewTag" value="1" checked=""/> 需要</label>
                </td>
            </tr>
            <tr>
                <th>实现的钩子方法</th>
                <td>
                    <select name="hooks[]" multiple="multiple" size="8" class="w500">
                        <list from="$hooks" name="h">
                            <option value="{$h.name}">{$h.name} ({$h.description})</option>
                        </list>
                    </select>
                </td>
            </tr>
        </table>

    </div>
    <div class="position-bottom">
        <input type="submit" value="确定" class="hd-success"/>
    </div>
</form>
<script>
    $("form").validate({
        name: {
            rule: {required: true,regexp:/^[A-Z][a-zA-Z]+$/},
            error: {required: '标识名不能为空',regexp:'只能是英文字母开头，且首字母大写'},
            message: '只能是英文字母开头，且首字母大写，标识只能包含英文、数子、下划线'
        },
        title: {
            rule: {required: true},
            error: {required: '插件名不能为空'},
            message: '插件的中文名称'
        },
        has_adminlist:{
            message:'访问方法:?app=Addon&m=插件名&c=Admin&a=index'
        },
        has_outurl:{
            message:'访问方法:?app=Addon&m=插件名&c=Index&a=index'
        },
        'hooks[]':{
            message:'如果不挂钩子可以不选择'
        }
    })
</script>
</body>
</html>