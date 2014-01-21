<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html;charset=UTF-8"/>
    <title>添加文章</title>
    <hdjs/>
    <js file="__GROUP__/static/js/js.js"/>
    <js file="__CONTROL_TPL__/js/add_edit.js"/>
    <css file="__CONTROL_TPL__/css/css.css"/>
    <script>
        //内容编辑器id，用于验证正文时使用
        var editor_id ='hd_{$model.tablename}_data[content]';
    </script>
</head>
<body>
<form action="{|U:add}" method="post" onsubmit="return false;" id="add" class="hd-form">

    <div class="wrap">
        <!--右侧缩略图区域-->
        <div class="content_right">
            <table class="table1">
                <tr>
                    <th>缩略图</th>
                </tr>
                <tr>
                    <td align="center">
                        <img id="thumb" src="__GROUP__/static/img/upload-pic.png"
                             style="cursor: pointer;width:145px;height:123px;"
                             onclick="file_upload('thumb','thumb',1,'thumb')"/>
                        <input type="hidden" name="thumb"/>
                        <!--<button type="button" class="btn btn-small" onclick="imageCrop('thumb')">裁切图片</button>-->
                        <button type="button" class="hd-cancel-small" onclick="file_upload('thumb','thumb',1,'thumb')">上传图片</button>
                        &nbsp;&nbsp;
                        <button type="button" class="hd-cancel-small" onclick="remove_thumb(this)">取消上传</button>
                    </td>
                </tr>
                <tr>
                    <th>发布时间</th>
                </tr>
                <tr>
                    <td>
                        <input type="text" readonly="readonly" id="updatetime" name="updatetime"
                               value="{|date:'Y/m/d h:i:s'}"
                               class="w150"/>
                        <script>
                            $('#updatetime').calendar({format: 'yyyy/MM/dd HH:mm:ss'});
                        </script>
                    </td>
                </tr>
                <tr>
                    <th>跳转地址</th>
                </tr>
                <tr>
                    <td>
                        <input type="text" name="redirecturl" class="w150"/><br/>
                        <span id="hd-redirecturl"></span>
                    </td>
                </tr>
                <tr>
                    <th>生成静态</th>
                </tr>
                <tr>
                    <td>
                        <label><input type="radio" name="ishtml" value="1" checked="checked"/> 是</label>
                        <label><input type="radio" name="ishtml" value="0"/> 否</label>
                    </td>
                </tr>
                <tr>
                    <th>允许回复</th>
                </tr>
                <tr>
                    <td>
                        <label><input type="radio" name="allowreply" value="1" checked="checked"/>
                            允许</label>
                        <label><input type="radio" name="allowreply" value="0"/> 不允许</label>
                    </td>
                </tr>
                <tr>
                    <th>点击</th>
                </tr>
                <tr>
                    <td>
                        <input type="text" name="click" class="w150" value="100"/>
                    </td>
                </tr>
                <tr>
                    <th>来源</th>
                </tr>
                <tr>
                    <td>
                        <input type="text" name="source" class="w150"/>
                    </td>
                </tr>
                <tr>
                    <th>作者</th>
                </tr>
                <tr>
                    <td>
                        <input type="text" name="author" class="w150" value="{$hd.session.username}"/>
                    </td>
                </tr>
            </table>
        </div>
        <div class="content_left">
            <div class="title-header">添加文章</div>
            <table class="table1">
                <tr>
                    <th class="w80">标题<span class="star">*</span></th>
                    <td>
                        <input id="title" type="text" name="title" class="title w400"/>
                        <label class="checkbox inline">
                            标题颜色 <input type="text" name="color" class="w60"/>
                        </label>
                        <button type="button" onclick="selectColor(this,'color')" class="hd-cancel">选取颜色</button>
                        <label class="checkbox inline">
                            <input type="checkbox" name="new_window" value="1"/> 新窗口打开
                        </label>
                    </td>
                </tr>
                <tr>
                    <th class="w80">SEO标题</th>
                    <td>
                        <input type="text" name="seo_title" class="w400"/>
                    </td>
                </tr>
                <tr>
                    <th>属性</th>
                    <td>
                        <list from="$flag" name="f">
                            <input type="hidden" name="content_flag[{$f.fid}][cid]" value="{$category.cid}"/>
                            <label class="checkbox inline">
                                <input type="checkbox" name="content_flag[{$f.fid}][fid]" value="{$f.fid}"/>
                                {$f.flagname} [{$f.fid}]
                            </label>
                        </list>
                    </td>
                </tr>
                <tr>
                    <th>栏目</th>
                    <td>
                        <input type="hidden" name="cid" value="{$category.cid}"/>
                        {$category.catname}
                    </td>
                </tr>
                <!--标准模型显示正文字段-->
                <if value="$model.type==1">

                    <tr>
                        <th>内容<span class="star">*</span></th>
                        <td>
                            {|tag:"ueditor",array("name"=>$model['tablename']."_data[content]",'php'=>'__ROOT__/index.php?a=Upload&c=Upload&m=ueditor_upload')}
                            <div class="editor_set control-group">
                                <label class="checkbox inline">
                                    <input type="checkbox" name="down_remote_pic" value="1"
                                    <if value="$hd.config.down_remote_pic==1">checked="checked"</if>
                                    />下载远程图片
                                </label>
                                <label class="checkbox inline">
                                    <input type="checkbox" name="auto_desc" value="1"
                                    <if value="$hd.config.auto_desc==1">checked="checked"</if>
                                    />截取内容
                                </label>
                                <label class="checkbox inline">
                                    <input type="text" value="200" class="input-mini" name="auto_desc_length"> 字符至内容摘要
                                </label>
                                <label class="checkbox inline">
                                    <input type="checkbox" name="auto_thumb" value="1"
                                    <if value="$hd.config.auto_thumb==1">checked="checked"</if>
                                    />获取内容第
                                </label>
                                <label class="checkbox inline">
                                    <input type="text" class="input-mini" value="1" name="auto_thumb_num">
                                     张图片作为缩略图
                                </label>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <th>关键字</th>
                        <td>
                            <input type="text" name="keywords" class="w400"/>
                            <span class="validate-message">如果不填，系统将自动从内容中提取</span>
                        </td>
                    </tr>
                    <tr>
                        <th>摘要</th>
                        <td>
                            <textarea name="description" class="w450 h80"></textarea>
                            <span class="validate-message">如果不填，系统将自动从内容中提取</span>
                        </td>
                    </tr>
                </if>
                <!--自定义字段-->
                {$custom_field}
                <!--自定义字段-->
                <tr>
                    <th>模板</th>
                    <td>
                        <input class="w250" type="text" name="template" id="template" onfocus="select_template('template');">
                        <button class="hd-cancel-small" type="button" onclick="select_template('template');">选择模板</button>
                    </td>
                </tr>
                <tr>
                    <th>HTML文件</th>
                    <td>
                        <input class="w250" type="text" name="html_path">
                        <span class="validate-message">如果不填,将按栏目规则生成静态</span>
                    </td>
                </tr>
            </table>
        </div>
    </div>
    <div class="position-bottom">
        <input type="submit" class="hd-success" value="确定"/>
        <input type="button" class="hd-cancel" onclick="hd_close_window()" value="关闭"/>
    </div>
</form>
</body>
</html>