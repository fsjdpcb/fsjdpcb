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
	addFavorite : function(mid, cid, aid) {
		$.post('index.php?m=Index&c=Index&a=addFavorite', {
			mid : mid,
			cid : cid,
			aid : aid
		}, function(data) {
			if (data.status == 1) {
				hdcms_alert(data.message);
			} else {
				hdcms_alert(data.message);
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
	show : function(to_uid, nickname) {		
		//未登录用户，弹出登录窗口
		if (!is_login('login')) {
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
	send : function() {
		var url = ROOT + "/index.php?a=Member&c=Message&m=send";
		if ($.trim($('#message_content').val()) == '') {
			hdcms_alert('内容不能为空');
			return false;
		}
		$.post(url, $('div#hd_send_message form').serialize(), function(data) {
			message.close();
			$('#message_content').val('');
			hdcms_alert(data.message);
		}, 'json');
		return false;
	},
	//关闭窗口
	close : function() {
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
	cache : {},
	/**
	 * 获得用户信息DIV
	 * @param uid 用户uid
	 */
	show : function(obj, uid) {
		//位置
		var _win_w = $(document).width();
		var _w = $(obj).width();
		var offset = $(obj).offset();
		var _top = offset.top - 20;
		var _left = offset.left;
		if (_left + _w + 330 > _win_w) {
			_left = _left - 330;
		} else {
			_left = _left + _w;
		}
		//提示信息div的id值
		var id = 'user_' + uid;
		//验证缓存
		if (user.cache[id]) {
			$("div#" + id).css({
				left : _left,
				top : _top
			});
			user.cache[id].show();
		} else {
			$('body').append('<div class="hd_user" id="' + id + '" style="position:absolute;width:330px;height:188px;"></div>');
			$("div#" + id).css({
				left : _left,
				top : _top
			});
			//缓存不存时，请求用户数据
			var url = WEB + '?m=Index&c=User&a=user&uid=' + uid;
			$.post(url, function(data) {
				if (data.status == 1) {
					$("div#" + id).append(data.message);
					user.cache[id] = $("div#" + id);
				}
			}, 'json');
		}
		//添加移除事件
		$(obj).mouseleave(function() {
			$('div.hd_user').hide();
		})
		$("div.hd_user").live('mouseenter', function() {
			$('div.hd_user').hide();
			$("div#" + id).show();
		})
		$("div.hd_user").live('mouseleave', function() {
			$('div.hd_user').hide();
		})
	},
	//用户关注处理类
	follow : function(obj, uid) {
		//未登录用户，弹出登录窗口
		if (!is_login()) {
			login.show();
		} else {
			var url = ROOT + '/index.php?m=Member&c=Follow&a=follow&uid=' + uid;
			$.post(url, function(data) {
				if (data.status == 1) {
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
		var html =  ' <div id="hdcms_alert">\
		<div class="hdcms_alert_title">提示信息</div><div class="hdcms_alert_content">操作成功</div>\
		</div>';
		$('body').append(html);
	}
	$("#hdcms_alert .hdcms_alert_content").html(message);
	$("#hdcms_alert").show();
	setTimeout(function() {
		$("#hdcms_alert").hide();
	}, 1000);
}
//是否登录
function is_login() {
	return cookie.get('login')
}
//cookie操作类
var cookie = {
	set : function(name, value, iDay) {
		var oDate = new Date();
		oDate.setDate(oDate.getDate() + iDay);
		document.cookie = name + '=' + value + ';expires=' + oDate;
	},
	get : function(name) {
		var arr = document.cookie.split('; ');
		for (var i = arr.length - 1; i >= 0; i--) {
			var arr2 = arr[i].split('=');
			if (arr2[0] === name) {
				return arr2[1];
			}
		}
		return '';
	},
	del : function(name) {
		cookie.setCookie(name, 1, -1);
	}
}

