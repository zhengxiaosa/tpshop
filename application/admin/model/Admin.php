<?php
/**
 * Created by PhpStorm.
 * User: 36934
 * Date: 2019/7/31
 * Time: 21:00
 */

namespace app\admin\model;
use think\Model;

class Admin extends Model
{
    protected $table = 'tpshop.system_user';

    protected function getCreateTimeAttr($value)
    {
        return $value ? date('Y-m-d H:i:s',$value) : '';
    }

    protected function setCreateTimeAttr()
    {
        return time();
    }
}