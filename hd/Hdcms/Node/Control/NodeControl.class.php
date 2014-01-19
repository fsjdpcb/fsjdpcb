<?php

/**
 * 权限节点管理
 * Class NodeControl
 * @author hdxj <houdunwangxj@gmail.com>
 */
class NodeControl extends AuthControl
{
    //模型
    private $_db;
    //节点树
    private $_node;

    public function __init()
    {
        parent::__init();
        //获得模型实例
        $this->_db = K("Node");
        $this->_node = F("node", false, NODE_CACHE_PATH);
    }

    //节点列表
    public function index()
    {
        $this->node = $this->_node;
        $this->display();
    }

    private function get_node_tree()
    {
        $node = array();
        foreach ($this->_node as $n) {
            if ($n['level'] != 3) {
                $node[] = $n;
            }
        }
        return $node;
    }

    //添加节点
    public function add()
    {
        if (IS_POST) {
            if ($this->_db->create()) {
                $this->_db->add();
                $this->_ajax(1);
            }
            echo $this->_db->error;
        } else {
            //配置菜单列表
            $pid = Q("get.pid", 0, "intval");
            $this->assign("pid", $pid);
            $this->assign("node", $this->get_node_tree());
            $this->display();
        }
    }

    //删除节点
    public function del()
    {
        $nid = Q("get.nid", "", "intval");
        if ($nid) {
            //如果有子菜单不删除
            $has_child = $this->_db->join()->where(array("pid" => $nid))->find();
            if (!$has_child) {
                $this->_db->del($nid);
                $this->_ajax(1);
            }
        }
        $this->_ajax(0);
    }

    //修改节点
    public function edit()
    {
        if (IS_POST) {
            //自动验证
            if ($this->_db->create()) {
                //添加菜单
                if ($this->_db->save()) {
                    $this->_ajax(1);
                }
            }
        } else {
            $nid = Q("get.nid", "intval");
            if ($nid) {
                $field = $this->_db->join(NULL)->find($nid);
                $this->assign("field", $field);
                //配置菜单列表
                $this->assign("node", $this->get_node_tree());
                $this->display();
            }
        }
    }

    //编辑菜单时的pid是否选择正确
    public function check_pid()
    {
        $nid = Q("post.nid");
        $pid = Q("post.pid");
        $stat = 1;
        //上级栏目是否为子栏目
        if ($pid == $nid || Data::isChild(F("node", false, NODE_CACHE_PATH), $pid, $nid, "nid")) {
            $stat = 0;
        }
        $this->_ajax($stat);
    }

    //更改菜单排序
    public function update_order()
    {
        $menu_order = Q("post.list_order");
        foreach ($menu_order as $nid => $order) {
            //排序
            $order = intval($order);
            $this->_db->save(array(
                "nid" => $nid,
                "list_order" => $order
            ));
        }
        $this->_ajax(1);
    }

    //更新缓存
    public function update_cache()
    {
        if ($this->_db->update_cache()) {
            $this->ajax(array('state' => 1, 'message' => '更新缓存成功'));
        }
    }
}















