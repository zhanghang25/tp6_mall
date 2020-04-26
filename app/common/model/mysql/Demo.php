<?php

namespace app\common\model\mysql;

use think\Model;

class Demo extends Model
{   
    public function getDemoDataByCategoryId($categoryId,$limit = 10){
        if(empty($categoryId)){
            return [];
        }
        $results = $this->where('category_id',$categoryId)
        ->limit(10)
        ->order('id','desc')
        ->select()
        ->toArray();

        return $results;
    }
}
