<?php

namespace app\common\business;

use app\common\model\mysql\Demo as DemoModel;

class Demo {
    /**
     * 
     * business 通过getDemoDataByCategoryId来获取数据
     */
    public function getDemoDataByCategoryId($categoryId,$limit = 10){
        $model = new DemoModel();
        $results = $model->getDemoDataByCategoryId($categoryId);

        if(empty($results)){
            return  [];
        }        

        $categories = config('category');
        foreach($results as $key => $result){
            $results[$key]['category_name'] = $categories[$result['category_id']] ?? "其他";
        }

        return $results;
    }
}