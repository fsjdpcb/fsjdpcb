/**
 * 会员登录处理类
 * @type {{create_element: create_element, show: show, close: close}}
 */
var login = {
    /**
     * 创建登录div
     */
    create_element: function () {
        if ($("#login_window").length == 0) {
            var html = '<div id="login_window">\
                <span id="close_login_window" onclick="login.close()">x</span>\
                <div class="error-pop"></div>\
                <div class="login_title">\
                    <a href="?a=Login&c=Login&m=reg&g=Member">注册帐号</a>\
                    <span>登录</span>\
                    </div>\
                        <div class="login_form">\
                            <form id="formLogin" method="post">\
                                <div>\
                                    <input type="text" name="username" id="username" class="input-text"\
                                    style="width: 100%; padding-left: 10px;"\
                                    placeholder="用户名/邮箱"/>\
                                </div>\
                                <div>\
                                    <input type="password" name="password" class="input-text" id="password"\
                                    style="width: 100%; padding-left: 10px;" placeholder="密码"/>\
                                </div>\
                                <input type="submit" class="my-btn-submit" value="登录"/>\
                            </form>\
                        </div>\
                    </div>\
                <div id="login_window_bg">\
                </div>';
            $("body").append(html);
        }
        //显示背景
        $("div#login_window_bg").show();
        //显示登录框
        $("div#login_window").show();
    },
    /**
     * 前台应用JS
     */
    show: function () {
        //创建登录div
        this.create_element();
        //会员登录
        $("#formLogin").submit(function () {
            //隐藏信息提示div
            $('div.error-pop').hide();
            //验证用户名
            var url = '?a=Login&c=Login&m=ajax_login&g=Member';
            $.post(url, $(this).serialize(), function (data) {
                if (data.state == 1) {
                    login.close();
                    hdcms_alert(data.message);
                    window.location.reload(true);
                } else {
                    $('div.error-pop').show().html(data.message);
                }
            }, 'json')
            return false;
        })
    },
    /**
     * 隐藏登录框
     */
    close: function () {
        //隐藏背景
        $("div#login_window_bg").hide();
        //隐藏登录框
        $("div#login_window").hide();
    }
}
/**
 * 文章内容处理类
 * @type {{add_favorite: add_favorite}}
 */
var content = {
    /**
     * 加入收藏
     * @param mid
     * @param cid
     * @param aid
     */
    add_favorite: function (mid, cid, aid) {
        $.post('index.php?a=Index&c=Article&m=add_favorite', {mid: mid, cid: cid, aid: aid}, function (data) {
            if (data.state == 1) {
                hdcms_alert('收藏成功!');
            } else {
                hdcms_alert('收藏失败');
            }
        }, 'json');
    }
}


/**
 * 短消息处理类
 */
var message = {
    /**
     * 显示信息窗口
     * @param uid
     * @param nickname
     */
    show: function (to_uid, nickname) {
        //未登录用户，弹出登录窗口
        if (!getCookie('login')) {
            login.show();
            return false;
        }
        if ($("#hd_send_message").length == 0) {
            var html = '<div id="hd_send_message">\
            <form method="post" onsubmit="return message.send()">\
            <input type="hidden" name="to_uid" value=""/>\
            <div class="message_title">私信</div>\
            <div class="message_content">\
            <table>\
                <tr>\
                    <td style="width:80px;">收信人：</td>\
                    <td><span id="nickname"></span></td>\
                </tr>\
                <tr>\
                    <td colspan="2">\
                        <textarea name="content" id="message_content"></textarea>\
                    </td>\
                </tr>\
            </table>\
            </div>\
            <div class="message_btn">\
                <input type="submit" class="message_submit" value="发送"/>\
                <button type="button" class="message_cancel" onclick="message.close()">关闭</button>\
            </div>\
        </form>\
        </div>';
            //添加窗口
            $("body").append(html);
        }
        $("input[name='to_uid']").val(to_uid);
        $("#nickname").html(nickname);
        $("#hd_send_message").show();

    },
    send: function () {
        var url = ROOT + "/index.php?g=Member&a=Message&c=Message&m=send";
        if ($.trim($('#message_content').val()) == '') {
            hdcms_alert('内容不能为空');
            return false;
        }
        $.post(url, $('div#hd_send_message form').serialize(), function (data) {
            message.close();
            $('#message_content').val('');
            hdcms_alert(data.message);
        }, 'json');
        return false;
    },
    //关闭窗口
    close: function () {
        $("#hd_send_message").hide();
        $("#hd_send_message_bg").hide();
    }
}
/**
 *
 * @type {{follow: follow}}
 */
var user = {
    //缓存
    cache: {},
    /**
     * 获得用户信息DIV
     * @param uid 用户uid
     */
    show: function (obj, uid) {
        //位置
        var offset = $(obj).offset();
        var _w = $(obj).width();
        var _left = offset.left + _w;
        var _top = offset.top - 20;
        //提示信息div的id值
        var id = 'user_' + uid;
        //验证缓存
        if (user.cache[id]) {
            $('div.hd_user_alert').hide();
            $("div#" + id).css({left: _left, top: _top});
            user.cache[id].show();
        } else {
            //缓存不存时，请求用户数据
            var url = ROOT + '/index.php?g=Member&a=User&c=User&m=user&uid=' + uid;
            $.post(url, function (data) {
                if (data.state == 1) {
                    $('div.hd_user_alert').hide();
                    $('body').append(data.message);
                    $("div#" + id).css({left: _left, top: _top});
                    user.cache[id] = $("div#" + id);
                }
            }, 'json');
        }
        //添加移除事件
        $(obj).mouseleave(function (e) {
            if ($(e.relatedTarget).attr('id') != id) {
                $("div#" + id).hide();
            }
        })
        $("div.hd_user_alert").live('mouseleave', function () {
            $('div.hd_user_alert').hide();
        })
    },
    //用户关注处理类
    follow: function (obj, uid) {
        //未登录用户，弹出登录窗口
        if (!getCookie('login')) {
            login.show();
        } else {
            var url = ROOT + '/index.php?g=Member&a=User&m=Follow&c=follow&uid=' + uid;
            $.post(url, function (data) {
                if (data.state == 1) {
                    hdcms_alert(data.message.message);
                    //关注 已关注
                    $(obj).html(data.message.follow);
                } else {
                    hdcms_alert(data.message);
                }

            }, 'json');
        }
    }
}
//HDCMS提示信息
function hdcms_alert(message) {
    if ($("#hdcms_alert").length == 0) {
        var html = '<div id="hdcms_alert">\
            <div class="hdcms_alert_title">提示信息</div><div class="hdcms_alert_content">操作成功</div>\
        </div>';
        $('body').append(html);
    }
    $("#hdcms_alert .hdcms_alert_content").html(message);
    $("#hdcms_alert").show();
    setTimeout(function () {
        $("#hdcms_alert").hide();
    }, 2000);
}
//获得cookie
function getCookie(c_name) {
    if (document.cookie.length > 0) {
        c_start = document.cookie.indexOf(c_name + "=");
        if (c_start != -1) {
            c_start = c_start + c_name.length + 1;
            c_end = document.cookie.indexOf(";", c_start);
            if (c_end == -1) {
                c_end = document.cookie.length;
            }
            return unescape(document.cookie.substring(c_start, c_end));
        }
    }
    return null
}

















