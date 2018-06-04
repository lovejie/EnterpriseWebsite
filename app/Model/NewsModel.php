<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class NewsModel extends Model
{
    use SoftDeletes;
    /**
     * 表名
     * @var string
     */
    protected $table = 'news';
    /**
     * 表字段
     * @var array
     */
    protected $fillable = ['mode','title','contents'];
    /**
     * 查询字段
     * @var array
     */
    public static $selectColumns = ['id','mode','title','contents'];

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
            if (!empty($params['mode'])){
                $query->where("mode",$params['mode']);
            }
            if (!empty($params['title'])){
                $query->where("title","like","%".$params['title']."%");
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
        return $this->hasOne("App\Model\DictModel","id","mode");
    }
}
