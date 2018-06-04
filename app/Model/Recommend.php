<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Recommend extends Model
{
    use SoftDeletes;
    /**
     * 表名
     * @var string
     */
    protected $table = 'recommend';
    /**
     * 表字段
     * @var array
     */
    protected $fillable = ['code','href','mode','bizid',"img","remark"];
    /**
     * 查询字段
     * @var array
     */
    public static $selectColumns = ['id','code','href','mode','bizid',"img","remark"];

    /**
     * 软删除字段
     * @var array
     */
    protected $dates = ['delete_at'];
    /**
     * 查询
     * @param $params
     * @return mixed
     */
    public function pageQuery($params){

        $result =  $this::where(function ($query) use ($params){
            if (!empty($params['bizid'])){
                $query->where("bizid",$params['bizid']);
            }
            if (!empty($params['code'])){
                $query->where("code","like","%".$params['code']."%");
            }
            if (!empty($params['href'])){
                $query->where("href","like","%".$params['href']."%");
            }
            if (!empty($params['id'])){
                $query->where("id",$params['id']);
            }
        });
        return $result;
    }
    /**
     * 关联菜单
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function hasOneMenu(){
        return $this->hasOne("App\Model\DictModel","id","bizid");
    }
}
