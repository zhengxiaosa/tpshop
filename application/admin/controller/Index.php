<?php
namespace app\admin\controller;
use think\Controller;

/**
 * Class Index
 * @package app\admin\controller
 */
class Index extends Controller
{
    public function index()
    {
        return $this->fetch();
    }

    public function welcome()
    {
        return $this->fetch();
    }
}
