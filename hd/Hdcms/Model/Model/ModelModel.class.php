<?php

class ModelModel extends Model
{
    //表名
    public $table = 'model';
    //模型id
    private $_mid;
    //自动完成
    public $auto = array(
        //模型表名小写
        array("tablename", "strtolower", 'function', 1, 3),
        //控制器首字母大写
        array("model_name", "ucfirst", 'function', 1, 3),
    );
    //自动验证
    public $validate = array(
        array("model_name", "nonull", "模型名称不能为空", 1, 3),
        array("tablename", "nonull", "表名不能为空", 1, 3),
        array("app_name", "nonull", "处理程序不能为空", 1, 3)
    );

    //构造函数
    public function __init()
    {
        $this->_mid = Q('mid', NULL, 'intval');
    }

    //创建模型表
    public function create_model_table()
    {
        //类型  基本模型|独立模型（只有主表）
        $type = Q('type', 1, 'intval');
        //主表
        $masterTable = C("DB_PREFIX") . strtolower($_POST['tablename']);
        $masterSql = <<<str
                    -- -----------------------------------------------------
                    -- 主表
                    -- -----------------------------------------------------
                    CREATE  TABLE IF NOT EXISTS `{$masterTable}` (
                      `aid` INT UNSIGNED NOT NULL AUTO_INCREMENT COMMENT '主键' ,
                      `cid` SMALLINT UNSIGNED NOT NULL default 0 COMMENT '栏目cid' ,
                      `title` char(100) NOT NULL DEFAULT '' COMMENT '标题' ,
                      `new_window` TINYINT(1) NOT NULL DEFAULT 0  COMMENT '新窗口打开' ,
                      `seo_title` char(100) NOT NULL DEFAULT '' COMMENT '标题' ,
                      `thumb` CHAR(200) NOT NULL DEFAULT '' COMMENT '缩略图' ,
                      `click` MEDIUMINT NOT NULL DEFAULT 0 COMMENT '点击次数' ,
                      `source` CHAR(30) NOT NULL DEFAULT '' COMMENT '来源' ,
                      `redirecturl` CHAR(100) NOT NULL DEFAULT '' COMMENT '转向链接' ,
                      `html_path` VARCHAR(255) NOT NULL DEFAULT '' COMMENT '自定义生成的静态文件地址' ,
                      `allowreply` TINYINT(1) NOT NULL DEFAULT 1 COMMENT '是否允许回复' ,
                      `author` CHAR(45) NOT NULL default '' COMMENT '作者' ,
                      `addtime` INT(10) NOT NULL default 0 COMMENT '添加时间' ,
                      `updatetime` INT(10) NOT NULL default 0 COMMENT '发布时间 ' ,
                      `color` CHAR(7) NOT NULL default '' COMMENT '标题颜色' ,
                      `template` varchar(255) NOT NULL default '' COMMENT '模板' ,
                      `ishtml` TINYINT(1) NOT NULL DEFAULT 1 ,
                      `isshow` TINYINT(1) NOT NULL DEFAULT 1  COMMENT '显示' ,
                      `arc_sort` int(10) UNSIGNED NOT NULL DEFAULT 100  COMMENT '排序' ,
                      `status` TINYINT(1) NOT NULL default 1,
                      `keywords` CHAR(100) NOT NULL DEFAULT '' COMMENT '关键字' ,
                      `description` VARCHAR(255) NOT NULL DEFAULT '' COMMENT '描述' ,
                      `uid` INT UNSIGNED NOT NULL  COMMENT '用户uid' ,
                      PRIMARY KEY (`aid`) ,
                      INDEX `cid` (`cid` ASC),
                      INDEX `uid` (`uid` ASC))
                    ENGINE = MyISAM;
str;
        //创建主表
        $this->exe($masterSql);
        //基本模型-->创建附表
        if ($type == 1) {
            $slaveTable = $masterTable . '_data';
            $slaveSql = <<<str
                -- -----------------------------------------------------
                -- 从表
                -- -----------------------------------------------------
                CREATE  TABLE IF NOT EXISTS `{$slaveTable}`(
                  `aid` INT UNSIGNED NOT NULL default 0 COMMENT '文章主表ID' ,
                  `content` text NULL COMMENT '正文' ,
                  INDEX `aid` (`aid` ASC) )
                ENGINE = MyISAM;
str;

            $this->exe($slaveSql);
            return true;
        }
    }

    /**
     * 添加模型
     */
    public function add_model()
    {
        //创建模型表
        if ($this->create()) {
            if ($this->create_model_table()) {
                //向模型表添加模型信息
                return $this->add();
            }
        }
    }

    /**
     * 修改模型
     */
    public function edit_model()
    {
        if ($this->create()) {
            return $this->save();
        }
    }

    /**
     * 删除模型
     */
    public function del_model()
    {
        //判断是否有栏目在使用模型
        if (!M("category")->find("mid={$this->_mid}")) {
            //查找当前模型信息
            $model = $this->find($this->_mid);
            //删除主表与表字段缓存
            if ($this->exe("DROP TABLE IF EXISTS " . C("DB_PREFIX") . $model['tablename'])) {
                //删除附表与表字段缓存
                if ($model['type'] == 1) {
                    $this->exe("DROP TABLE IF EXISTS " . C("DB_PREFIX") . $model['tablename'] . '_data');
                }
                //删除表记录
                $this->del($this->_mid);
                //删除模型字段信息
                $this->table("field")->where("mid={$this->_mid}")->del();
                //删除模型字段缓存
                F($this->_mid, NULL, FIELD_CACHE_PATH);
                return true;
            }
        }
    }

    //更新模型缓存
    public function update_cache()
    {
        $model = $this->order(array("m_order" => "desc"))->all();
        $data = array();
        foreach ($model as $d) {
            $data[$d['mid']] = $d;
        }
        F("model", $data, MODEL_CACHE_PATH);
        return $model;
    }


    public function __after_insert($data)
    {
        $this->update_cache();
    }

    public function __after_update($data)
    {
        $this->update_cache();
    }

    public function __after_delete($data)
    {
        $this->update_cache();
    }

}