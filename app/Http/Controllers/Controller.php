<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;

abstract class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    /**
     * 创建无限级分类树
     * @param $items
     * @return array
     */
    public function generateTree($items,$pId){
        $tree = '';
        foreach($items as $k => $v)
        {
            if($v['pcode'] == $pId)
            {        //父亲找到儿子
                $v['items'] = $this->generateTree($items, $v['code']);
//                $v['homePage'] = 2;
                $tree[] = $v;
                //unset($data[$k]);
            }
        }
        return $tree;
    }
}


