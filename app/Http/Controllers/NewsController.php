<?php

namespace App\Http\Controllers;

use App\Model\DictModel;
use App\Model\NewsModel;
use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class NewsController extends Controller
{

    /**
     * @param Request $request
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function index(Request $request)
    {
        $mode = $request->mode;
        $menu = null;
        if (empty($mode)){
            $menu = DictModel::where("pcode","news")->first();
            if (empty($menu)){
                return view("errors.404");
            }
            $mode = $menu->id;
        }else{
            $menu = DictModel::find($mode);
        }

        $newlist = NewsModel::where("mode",$mode)->paginate(10);
        return view("home/newslist",['newslist'=>$newlist,'menu'=>$menu]);
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
        $news = NewsModel::find($id);
        $menu = DictModel::find($news->mode);
        return view("home.newsdetails",["news"=>$news,"menu"=>$menu]);
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
