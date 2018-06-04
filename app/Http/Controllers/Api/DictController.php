<?php

namespace App\Http\Controllers\Api;

use App\Model\DictModel;
use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class DictController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        try{
            $menus = DictModel::where("status",1)->select(DictModel::$selectColumns)->get();
            $tree = $this->generateTree($menus,"menu");
            return json_encode($tree);
        }catch (\Exception $exception){
            return json_encode($exception);
        }
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function selectByPcode(Request $request)
    {
//        $pcode = $request->pcode;
        $map = $request->all();
        $menus = DictModel::where("status",1)->select(["id","name","code","pcode"])->get();
       /* $menus = DictModel::where(function ($query) use ($map){
            if (!empty($map["pcode"])){
                $query->where("pcode",$map["pcode"]);
            }
        })->select(["id","name"])->get();;*/

        if (!empty($menus)&&!empty($map["pcode"])){
            $menus =  $this->generateTree($menus,$map["pcode"]);
        }

        return json_encode($menus);
    }


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
