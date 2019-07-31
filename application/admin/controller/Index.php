<?php
namespace app\admin\controller;
use think\Controller;
use think\Db;
/**
 * Class Index
 * @package app\admin\controller
 */
class Index extends Controller
{
    public function index()
    {
       $admin = Db::table('system_user')->field('*')->order('id DESC')->select();
        return $this->fetch('index',['admin'=>$admin]);
    }

    public function welcome()
    {
        return $this->fetch();
    }
}
