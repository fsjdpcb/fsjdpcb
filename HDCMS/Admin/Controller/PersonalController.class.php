<?php

/**
 * 管理员个人信息管理模块
 * Class AdminControl
 * @author 向军 <houdunwangxj@gmail.com>
 */
class PersonalController extends AuthController
{
    //操作模型
    private $db;

    //构造函数
    public function __init()
    {
        $this->db = K('User');
    }

    /**
     * 编辑个人信息
     */
    public function editInfo()
    {
        if (IS_POST) {
            if ($this->db->where("uid={$_SESSION['uid']}")->save()) {
                $this->success('修改个人资料成功');
            }
        } else {
            $this->user = $this->db->find(session('uid'));
            $this->display();
        }
    }

    /**
     * 修改密码
     */
    public function editPassword()
    {
        if (IS_POST) {
            $_POST['uid'] = session('uid');
            if ($this->db->editUser($_POST)) {
                $this->success('修改密码成功');
            } else {
                $this->error($this->db->error);
            }
        } else {
            $this->user = $this->db->find(session('uid'));
            $this->display();
        }
    }

    /**
     * 修改密码操作时Ajax验证密码
     */
    public function checkPassword()
    {
        if ($this->db->checkUserPassword(session('uid'), $_POST['old_password'])) {
            echo 1;
        } else {
            echo 0;
        }
        exit;
    }

    //验证邮箱
    public function checkEmail()
    {
        $email = Q("post.email");
        if ($uid = Q('uid')) {
            $this->db->where("uid<>$uid");
        }
        echo $this->db->find("email='$email'") ? 0 : 1;
        exit;
    }
}