<?php

namespace app\demo\controller;

use app\BaseController;
use app\Request;
use think\facade\Db;

class Demo extends BaseController
{
    public function show()
    {
        $result = [
            'status' => 1,
            'message' => 'ok',
            'result' => [
                'id' => 1,
            ],
        ];
        $header = [
            "Token" => "esdfsjc2345ddkkct",
        ];
        return json($result, 201, $header);
    }

    public function request(Request $request)
    {
        dump($this->request->param("abc", 2, 'intval'));
        dump($request->isGet());
    }

    public function demo()
    {
        $data = [
            "title" => "singwa007",
            "content" => "singwa来自北京",
            "category_id" => "2",
            "status" => 1,
            "create_time" => time()
        ];

        $result = Db::table("mall_demo")->insert($data);
        dump($result);
    }

    public function model1()
    {
    }
}
