<?php
namespace app\controller;

use app\BaseController;
use app\Request;
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
        return json($result,201,$header);
    }

    public function request(Request $request)
    {
        dump($this->request->param("abc",2,'intval'));
        dump($request->isGet());
    }
}