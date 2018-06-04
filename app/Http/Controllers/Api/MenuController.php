<?php

namespace App\Http\Controllers\Api;

use App\Model\MenuModel;
use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class MenuController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        try{
            $menus = MenuModel::where("status",1)->select(MenuModel::$selectColumns)->get();
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
//        $menus = MenuModel::where("pcode",$pcode)->where("status",1)->select(["id","name"])->get();
        $menus = MenuModel::where(function ($query) use ($map){
            if (!empty($map["pcode"])){
                $query->where("pcode",$map["pcode"]);
            }
        })->select(["id","name"])->get();;
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
        $map = $request->all();
        $req = MenuModel::create($map);
        dd($req);
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
