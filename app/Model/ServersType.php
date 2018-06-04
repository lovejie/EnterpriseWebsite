<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class ServersType extends Model
{
    use SoftDeletes;
    /**
     * 表名
     * @var string
     */
    protected $table = 'servers_type';
    /**
     * 表字段
     * @var array
     */
    protected $fillable = ['mode','name','cpu','memory','harddisk','bandwidth','ipnum','stand','price','size',"highanti"];
    /**
     * 查询字段
     * @var array
     */
    public static $selectColumns = ['id','mode','name','cpu','memory','harddisk','bandwidth','ipnum','stand','price','size',"highanti"];

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
            if (!empty($params['name'])){
                $query->where("name","like","%".$params['name']."%");
            }
            if (!empty($params['cpu'])){
                $query->where("cpu","like","%".$params['cpu']."%");
            }
            if (!empty($params['memory'])){
                $query->where("memory","like","%".$params['memory']."%");
            }
            if (!empty($params['harddisk'])){
                $query->where("harddisk","like","%".$params['harddisk']."%");
            }
            if (!empty($params['bandwidth'])){
                $query->where("bandwidth","like","%".$params['bandwidth']."%");
            }
            if (!empty($params['ipnum'])){
                $query->where("ipnum","like","%".$params['ipnum']."%");
            }
            if (!empty($params['stand'])){
                $query->where("stand","like","%".$params['stand']."%");
            }
            if (!empty($params['size'])){
                $query->where("size","like","%".$params['size']."%");
            }
            if (!empty($params['price_min'])){
                $query->where("price",">=",$params['price_min']);
            }
            if (!empty($params['price_max'])){
                $query->where("price","<=",$params['price_max']);
            }
            if (!empty($params['highanti'])){
                $query->where("highanti",$params['highanti']);
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
