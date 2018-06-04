<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class MenuModel extends Model
{
    /**
     * 表名
     * @var string
     */
    protected $table = 'menu';
    /**
     * 表字段
     * @var array
     */
    protected $fillable = ['code','name','pcode','status',"mode","href"];
    /**
     * 查询字段
     * @var array
     */
    public static $selectColumns = ['id','code','name',"mode",'pcode',"href"];

    /**
     * 查询
     * @param $params
     * @return mixed
     */
    public function pageQuery($params){

        $result =  $this::where(function ($query) use ($params){
            if (!empty($params['mode'])){
                $query->where("mode",$params['mode']);
            }
            if (!empty($params['code'])){
                $query->where("code","like","%".$params['code']."%");
            }
            if (!empty($params['name'])){
                $query->where("name","like","%".$params['name']."%");
            }
            if (!empty($params['pcode'])){
                $query->where("pcode","like","%".$params['pcode']."%");
            }
            if (!empty($params['href'])){
                $query->where("href",$params['href']);
            }
            if (!empty($params['id'])){
                $query->where("id",$params['id']);
            }
        });
        return $result;
    }

}
