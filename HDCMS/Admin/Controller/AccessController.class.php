<?php

/**
 * 后台rbac权限管理
 * Class AccessControl
 * @author 向军 <houdunwangxj@gmail.com>
 */
class AccessController extends AuthController
{
    //模型
    private $db;
    //角色id
    private $rid;

    //构造函数
    public function __init()
    {
        $this->db = K('Access');
        $this->rid = Q('rid', 0, 'intval');
        if (!$_SESSION['user']['web_master']) {
            $this->error('没有操作权限');
        }
    }

    //设置权限
    public function edit()
    {
        if (IS_POST) {
            $this->db->where(array("rid" => $this->rid))->del();
            if (!empty($_POST['nid'])) {
                foreach ($_POST['nid'] as $v) {
                    $this->db->add(array("rid" => $this->rid, "nid" => $v));
                }
            }
            $this->success('修改成功');
        } else {
            $sql = "SELECT n.nid,n.title,n.pid,n.type,a.rid as access_rid FROM hd_node AS n LEFT JOIN
            			(SELECT * FROM (SELECT * FROM hd_access WHERE rid={$this->rid}) AS t)AS a
                		ON n.nid = a.nid ORDER BY list_order ASC";
            $result = $this->db->query($sql);
            foreach ($result as $n => $r) {
                //当前角色已经有权限或不需要验证的节点
                $checked = $r['access_rid'] || $r['type'] == 2 ? " checked=''" : '';
                //不需要验证的节点，关闭选择（因为所有管理员都有权限）
                $disabled = $r['type'] == 2 ? 'disabled=""' : '';
                //前台表单
                $result[$n]['checkbox'] = "<label><input type='checkbox' name='nid[]' value='{$r['nid']}' $checked $disabled/> {$r['title']}</label>";
            }
            $this->assign('access', Data::channelLevel($result, 0, '-', 'nid'));
            $this->assign('rid', $this->rid);
            $this->display();
        }
    }
}