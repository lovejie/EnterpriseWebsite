<?php

namespace App\Http\Controllers;

use App\Model\DictModel;
use App\Model\Recommend;
use App\Model\ServersDesc;
use App\Model\ServersType;
use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class IndexController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

      $bannar = Recommend::where("code","bannar")->take(4)->get();
      $bannardown = Recommend::where("code","server")->take(5)->get();
      $serverRecommends = Recommend::where("code","boutique_server")->select("bizid")->take(10)->get();
      $ids = array();
      if (!empty($serverRecommends->first())){
        foreach ($serverRecommends as $serverRecommend){
            array_push($ids,$serverRecommend->bizid);
        }
      }
      $recommends = DictModel::whereIn("id",$ids)->get();
      return view("home/index",["recommends"=>$recommends,"bannar"=>$bannar,"bannardown"=>$bannardown]);
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function vpsDesc(Request $request)
    {
        $mode = $request->mode;
        $servers = DictModel::where("pcode","vps")->select(DictModel::$selectColumns)->get();
        $desc = null;
        if (empty($mode)){
            $mode =  $servers->first()->id;
        }
        $desc = ServersDesc::where("mode",$mode)->select("desc")->first();
        return view("home/desc",["servers"=>$servers,"desc"=>$desc]);
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function vps(Request $request)
    {
        $mode = $request->mode;
        $serversType =  ServersType::where("mode",$mode)->select(ServersType::$selectColumns)->get();
        if ( empty($serversType->first())){
            return view("error/404");
        }
        $servers = DictModel::where("pcode",$serversType->first()->hasOneMenu["pcode"])->select(DictModel::$selectColumns)->get();
        $desc = null;
//        dd($mode);
//        dd($serversType);
        if (empty($servers->first())){
            return view("error/404");
        }
        return view("home/vps",["servers"=>$servers,"serversType"=>$serversType]);
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
