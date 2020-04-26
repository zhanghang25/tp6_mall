<?php
namespace app\demo\controller;

use app\BaseController;

class Ee extends BaseController{
    public function index (){
        // echo $abc;
        throw new \think\exception\HttpException(501,"找不到相应数据！");
    }
}