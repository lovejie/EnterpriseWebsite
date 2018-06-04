<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class DictModel extends Model
{
    //
    /**
 * 表名
 * @var string
 */
    protected $table = 'dict';
    /**
     * 表字段
     * @var array
     */
    protected $fillable = ['code','name','pcode','status'];

    /**
     * 查询字段
     * @var array
     */
    public static $selectColumns = ['id','code','name','pcode'];


    public function hasManyType(){
        return $this->hasMany("App\Model\ServersType",'mode','id')->select(ServersType::$selectColumns)->take(4);
    }
}
