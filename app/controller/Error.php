<?php

namespace app\controller;

class Error
{
    public function  __call($name, $argument)
    {

        return show(config('status.controller_not_found'), "找不到该{$name}控制器", null, 404);
    }
}
