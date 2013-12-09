<?php
/**
 * 栏目管理模型
 * Class CategoryModel
 * @author hdxj <houdunwangxj@gamil.com>
 */
class CategoryModel extends RelationModel
{
    //栏目表
    public $table = "category";
    //内容表
    protected $content_table;
    //栏目ic
    protected $cid;
    //模型缓存
    protected $model;
    //栏目缓存
    protected $category;
    public $auto = array(
        array("path", "_path", 2, 3, "method")
    );

    //path字段自动完成
    public function _path()
    {
        //父pid
        $pid = Q("post.pid", 0, 'intval');
        if ($pid) {
            return $this->category[$pid]['path'] . '_' . $pid;
        } else {
            return 0;
        }


    }

    //构造函数
    public function __construct()
    {
        parent::__construct();
        $this->category = F("category", false, CATEGORY_CACHE_PATH);
        $this->model = F("model", false, MODEL_CACHE_PATH);
        $this->cid = intval(Q("get.cid") ? Q("get.cid") : Q("post.cid"));
        if ($this->cid) {
            //当前栏目数据主表
            $this->content_table = $this->model[$this->category[$this->cid]['mid']]['tablename'];
        }
    }

    //更新栏目缓存
    public function update_cache()
    {
        $category = $this->order("catorder DESC,cid DESC")->all();
        $data = array();
        if (!empty($category)) {
            foreach ($category as $n => $v) {
                $v["disabled"] = "";
                if ($v["cattype"] == 2) {
                    $v["disabled"] = 'disabled="disabled"';
                }
                $data[$v['cid']] = $v;
            }
        }
        F("category", $data, CATEGORY_CACHE_PATH);
        return $data;
    }

    //删除栏目
    public function del_category()
    {
        $db = K("Content");
        if ($this->cid) {
            //删除栏目文章
            if ($db->where("cid=" . $this->cid)->del()) {
                //删除栏目
                if ($this->del($this->cid)) {
                    return true;
                }
            }
        }
        return false;
    }

    //获得菜单树状数据
    public function get_tree()
    {
        $menu = F("category", false, CATEGORY_CACHE_PATH);
        if (!$menu) {
            $menu = $this->update_cache();
        }
        //树状格式化
        return Data::tree($menu, "catname", "cid");
    }


    public function __after_del()
    {
        $this->update_cache();
    }

    public function __after_add()
    {
        $this->update_cache();
    }

    public function __after_update()
    {
        $this->update_cache();
    }
}