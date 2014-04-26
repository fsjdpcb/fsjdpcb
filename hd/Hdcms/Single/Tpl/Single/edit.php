<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
    "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html;charset=UTF-8"/>
    <title>单文章修改</title>
    <hdjs/>
    <js file="__GROUP__/static/js/js.js"/>
    <js file="__CONTROL_TPL__/js/js.js"/>
    <css file="__CONTROL_TPL__/css/css.css"/>
</head>
<body>
<form action="{|U:edit}" method="post" id="edit" class="hd-form" onsubmit="return false">
    <input type="hidden" value="{$field.cid}" name="cid"/>
    <input type="hidden" value="{$field.aid}" name="aid"/>
    <div class="wrap">
        <!--右侧缩略图区域-->
        <div class="content_right">
            <table class="table1">
                <tr>
                    <th>缩略图</th>
                </tr>
                <tr>
                    <td>
                        <img id="thumb" src="{$field.thumb_img}" style="cursor: pointer;width:135px;height:113px;"
                             onclick="file_upload({id:'thumb',type:'thumb',num:1,name:'thumb'})"/>
                        <input type="hidden" name="thumb" value="{$field.thumb}"/>
                        <button type="button" class="hd-cancel-small" onclick="file_upload({id:'thumb',type:'thumb',num:1,name:'thumb'})">
                            上传图片
                        </button>
                        <button type="button" class="hd-cancel-small" onclick="remove_thumb(this)">取消上传</button>
                    </td>
                </tr>
                <tr>
                    <th>发布时间</th>
                </tr>
                <tr>
                    <td>
                        <input type="text" id="updatetime" readonly="readonly" name="updatetime"
                               value="{$field.updatetime|date:'Y/m/d H:i:s',@@}"
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
                        <input type="text" name="redirecturl" value="{$field.redirecturl}" class="w150"/>
                    </td>
                </tr>
                <tr>
                    <th>生成静态</th>
                </tr>
                <tr>
                    <td>
                        <label><input type="radio" name="ishtml" value="1"
                            <if value="$field.ishtml==1">checked="checked"</if>
                            /> 是</label>
                        <label><input type="radio" name="ishtml" value="0"
                            <if value="$field.ishtml==0">checked="checked"</if>
                            /> 否</label>
                    </td>
                </tr>
                <tr>
                    <th>允许回复</th>
                </tr>
                <tr>
                    <td>
                        <label><input type="radio" name="allowreply" value="1"
                            <if value="$field.allowreply==1">checked="checked"</if>
                            />
                            允许</label>
                        <label><input type="radio" name="allowreply" value="0"
                            <if value="$field.allowreply==0">checked="checked"</if>
                            /> 不允许</label>
                    </td>
                </tr>
                <tr>
                    <th>点击</th>
                </tr>
                <tr>
                    <td>
                        <input type="text" name="click" class="w150" value="{$field.click|default:0}"/>
                    </td>
                </tr>
                <tr>
                    <th>来源</th>
                </tr>
                <tr>
                    <td>
                        <input type="text" name="source" value="{$field.source}" class="w150"/>
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
                        <input id="title" type="text" name="title" value="{$field.title}" class="title w400"/>
                        <label>
                            标题颜色 <input type="text" name="color" value="{$field.color}" class="w60"/>
                        </label>
                        <button type="button" onclick="selectColor(this,'color')" class="hd-cancel">选取颜色</button>
                        <label class='checkbox inline'><input type="checkbox" name="new_window" value="1"
                            <if value="$field.new_window==1">checked='checked'</if>
                            /> 新窗口打开</label>
                    </td>
                </tr>
                <tr>
                    <th class="w80">SEO标题</th>
                    <td>
                        <input type="text" name="seo_title" value="{$field.seo_title}" class="w400"/>
                    </td>
                </tr>
                <!--标准模型显示正文字段-->
                    <tr>
                        <th>内容<span class="star">*</span></th>
                        <td>
                            {|tag:"ueditor",array("name"=>"content","content"=>$field['content'])}
                        </td>
                    </tr>
                <tr>
                    <th>关键字</th>
                    <td>
                        <input type="text" name="keywords" value="{$field.keywords}" class="w400"/>
                    </td>
                </tr>
                <tr>
                    <th>摘要</th>
                    <td>
                        <textarea name="description" class="w450 h80">{$field.description}</textarea>
                    </td>
                </tr>
                <tr>
                    <th>模板</th>
                    <td>
                        <input class="w250" type="text" name="template" value="{$field.template}" id="template" onclick="select_template('template');">
                        <button class="hd-cancel-small" type="button" onclick="select_template('template');">选择模板
                        </button>
                    </td>
                </tr>
                <tr>
                    <th>HTML文件</th>
                    <td>
                        <input class="w250" type="text" name="html_path" value="{$field.html_path}">
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