<include file="__PUBLIC__/header.php"/>
	<body>
		<div class="wrap">
			<form class="hd-form" method="post">
				<input type="hidden" name="m" value="content"/>
				<input type="hidden" name="mid" value="{$hd.get.mid}"/>
				<input type="hidden" name="cid" value="{$hd.get.cid}"/>
				<input type="hidden" name="state" value="{$hd.get.state}"/>
				<div class="search">
					添加时间：
					<input id="begin_time" placeholder="开始时间" readonly="readonly" class="w80" type="text" value="" name="search_begin_time">
					<script>
						$('#begin_time').calendar({
							format : 'yyyy-MM-dd'
						});
					</script>
					-
					<input id="end_time" placeholder="结束时间" readonly="readonly" class="w80" type="text" value="" name="search_end_time">
					<script>
						$('#end_time').calendar({
							format : 'yyyy-MM-dd'
						});
					</script>
					&nbsp;&nbsp;&nbsp;
					<select name="flag" class="w100">
						<option selected="" value="">全部</option>
						<list from="$flag" name="f">
							<option value="{$f}" <if value="$hd.post.flag eq $f">selected=''</if>>{$f}</option>
						</list>
					</select>
					&nbsp;&nbsp;&nbsp;
					<select name="search_type" class="w100">
						<option value="1" <if value="$hd.get.search_type eq 1">selected=''</if>>标题</option>
						<option value="2" <if value="$hd.get.search_type eq 2">selected=''</if>>简介</option>
						<option value="3" <if value="$hd.get.search_type eq 3">selected=''</if>>用户名</option>
						<option value="4" <if value="$hd.get.search_type eq 4">selected=''</if>>用户uid</option>
					</select>&nbsp;&nbsp;&nbsp;
					关键字：
					<input class="w200" type="text" placeholder="请输入关键字..." value="{$hd.post.search_keyword}" name="search_keyword">
					<button class="hd-cancel" type="submit">
						搜索
					</button>
				</div>
			</form>
			<div class="menu_list">
				<ul>
					<li>
						<a href="{|U:'show',array('mid'=>$_GET['mid'],'cid'=>$_GET['cid'])}"
						<if value="!isset($hd.get.content_status)">class="action"</if> >
							内容列表
						</a>
					</li>
					<li>
						<a href="{|U:'show',array('mid'=>$_GET['mid'],'cid'=>$_GET['cid'],'content_status'=>0)}"
					<if value="$hd.get.content_status === '0'">class="action"</if> >
							未审核
						</a>
					</li>
					<li>
						<a href="javascript:;" onclick="hd_open_window('{|U:add,array('cid'=>$_GET['cid'],'mid'=>$_GET['mid'])}')">
							添加内容
						</a>
					</li>
				</ul>
			</div>
			<table class="table2 hd-form">
				<thead>
					<tr>
						<td class="w30">
						    <input type="checkbox" id="select_all"/>
						</td>
						<td class="w30">aid</td>
						<td class="w30">cid</td>
						<td class="w30">排序</td>
						<td>标题</td>
						<td class="w50">状态</td>
						<td class="w100">作者</td>
						<td class="w80">修改时间</td>
						<td class="w120">操作</td>
					</tr>
				</thead>
				<list from="$data" name="c">
					<tr>
						<td>
						<input type="checkbox" name="aid[]" value="{$c.aid}"/>
						</td>
						<td>{$c.aid}</td>
						<td>{$c.cid}</td>
						<td>
						<input type="text" class="w30" value="{$c.arc_sort}" name="arc_order[{$c.aid}]"/>
						</td>
						<td>
						<a href="{|U:'Index/Index/content',array('mid'=>$_GET['mid'],'cid'=>$_GET['cid'],'aid'=>$c['aid'])}" target="_blank">
							{$c.title|mb_substr:0,50,'utf-8'}
						</a>
						<if value="$c.flag">
							<span style="color:#FF0000"> [{$c.flag}]</span>
						</if></td>
						<td>
						<if value="$c.content_status eq 1">
							发表
						</if>
                            <if value="$c.content_status eq 0">
							待审查
						</if>
                            <if value="$c.content_status eq 2">
                                自动
                            </if>
                        </td>
						<td>{$c.username}</td>
						<td>{$c.updatetime|date:"Y-m-d",@@}</td>
						<td>
						<a href="{|U:'Index/Index/content',array('mid'=>$c['mid'],'cid'=>$c['cid'],'aid'=>$c['aid'])}" target="_blank">
							访问
						</a><span
						class="line">|</span>
						<a href="javascript:hd_open_window('{|U:edit,array('cid'=>$_GET['cid'],'mid'=>$_GET['mid'],'aid'=>$c['aid'])}')">编辑
						</a><span class="line">|</span>
						<a href="javascript:" onclick="hd_confirm('确认删除吗？',function(){hd_ajax('{|U:'del'}',{aid:{$c['aid']},cid:{$c['cid']},mid:{$c['mid']}})})">
							删除
						</a>
						</td>
					</tr>
				</list>
			</table>
			<div class="page1">
				{$page}
			</div>

        </div>
        <div class="position-bottom">
            <input type="button" class="hd-cancel" value="全选" onclick="select_all('.table2')"/>
            <input type="button" class="hd-cancel" value="反选" onclick="reverse_select('.table2')"/>
            <input type="button" class="hd-cancel" onclick="order({$hd.get.mid},{$hd.get.cid})" value="更改排序"/>
            <input type="button" class="hd-cancel" onclick="del({$hd.get.mid},{$hd.get.cid})" value="批量删除"/>
            <input type="button" class="hd-cancel" onclick="audit({$hd.get.mid},{$hd.get.cid},1)" value="审核"/>
            <input type="button" class="hd-cancel" onclick="audit({$hd.get.mid},{$hd.get.cid},0)" value="取消审核"/>
            <input type="button" class="hd-cancel" onclick="move({$hd.get.mid},{$hd.get.cid})" value="批量移动"/>
        </div>
        <script>
            //全选
            $("input#select_all").click(function () {
                $("[type='checkbox']").attr("checked", $(this).attr("checked") == "checked");
            })
            //全选文章
            function select_all() {
                $("[type='checkbox']").attr("checked", "checked");
            }
            //反选文章
            function reverse_select() {
                $("[type='checkbox']").attr("checked", function () {
                    return !$(this).attr("checked") == 1;
                });
            }
            //更新排序
            function order(mid,cid) {
                if ($("input[type='text']").length == 0) {
                    alert('没有文章用来排序！');
                    return false;
                }
                var data = $("input[type='text']").serialize();
                hd_ajax(CONTROLLER + "&a=order&mid="+mid+"&cid=" + cid, data);
            }
            /**
             * 删除文章
             * @param mid
             * @param cid
             * @param aid
             */
            function del(mid,cid,aid) {
                //单文章删除
                if (aid) {
                    var ids = {aid: aid}
                } else {//多文章删除
                    var aids = $("input:checked").serialize();
                }
                if (aids) {
                    hd_confirm('确定要删除文章吗?',function(){
                        $.ajax({
                            type: "POST",
                            url: CONTROLLER + "&a=del" + "&mid=" + mid+"&cid="+cid,
                            dataType: "JSON",
                            cache: false,
                            data: aids,
                            success: function (data) {
                                if (data.status == 1) {
                                    $.dialog({
                                        message: data.message,
                                        type: "success",
                                        close_handler: function () {
                                            location.href = URL;
                                        }
                                    });
                                } else {
                                    $.dialog({
                                        message: data.message,
                                        type: "error",
                                        close_handler: function () {
                                            location.href = URL;
                                        }
                                    });
                                }
                            }
                        })
                    })
                } else {
                    $.dialog({message: '请选择文章', type: "error"});
                }
            }
            //设置状态
            function audit(mid,cid, state) {
                //单文章删除
                var ids = $("input:checked").serialize();
                if (ids) {
                    $.ajax({
                        type: "POST",
                        url: CONTROLLER + "&a=audit" + "&status=" + state + "&mid="+mid+"&cid=" + cid,
                        dataType: "JSON",
                        cache: false,
                        data: ids,
                        success: function (data) {
                            if (data.status == 1) {
                                $.dialog({
                                    message: data.message,
                                    type: "success",
                                    close_handler: function () {
                                        location.href = URL;
                                    }
                                });
                            } else {
                                $.dialog({
                                    message: data.message,
                                    type: "error",
                                    close_handler: function () {
                                        location.href = URL;
                                    }
                                });
                            }
                        }
                    })
                } else {
                    $.dialog({message: '请选择文章', type: "error"});
                }
            }
            /**
             * 移动文章
             * @param mid 模型mid
             * @param cid 当前栏目
             */
            function move(mid,cid) {
                var aid = '';
                $("input[name*=aid]:checked").each(function (i) {
                    aid += $(this).val() + "|";
                })
                aid = aid.slice(0, -1);
                if (aid) {
                    $.modal({
                        width: 600, height: 420,
                        title: '移动文章',
                        content: '<iframe style="width: 100%;height: 99%;" src="' + CONTROLLER + '&a=move&mid='+mid+'&cid=' + cid + '&aid=' + aid + '" frameborder="0"></iframe>'
                    })
                } else {
                    $.dialog({message: '请选择文章', type: "error"});
                }
            }
        </script>
	</body>
</html>