<?php
/**
 * Created by PhpStorm.
 * User: 36934
 * Date: 2019/7/31
 * Time: 21:36
 */

namespace app\admin\controller;
use think\Controller;

/**
 * Class Login
 * @package app\admin\controller
 */
class Login extends Controller
{
    /**
     * @return mixed
     */
    public function index()
    {
        return $this->view->fetch();
    }

    public function check()
    {
        $data = $this->request->param();
        $this->success('登录成功');
    }
}