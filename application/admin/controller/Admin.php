<?php
/**
 * Created by PhpStorm.
 * User: 36934
 * Date: 2019/7/31
 * Time: 21:00
 */

namespace app\admin\controller;

use think\Controller;
use app\admin\model\Admin as AdminModel;

/**
 * Class Admin
 * @package app\admin\controller
 */
class Admin extends Controller
{
    /**
     * @return mixed
     * @throws \think\db\exception\DataNotFoundException
     * @throws \think\db\exception\ModelNotFoundException
     * @throws \think\exception\DbException
     * 管理员列表
     */
    public function index()
    {
        $data = (new AdminModel)->field('*')->order('id DESC')->select();
        return $this->fetch('index', ['data' => $data]);
    }

    public function add()
    {
        return $this->fetch();
    }
}