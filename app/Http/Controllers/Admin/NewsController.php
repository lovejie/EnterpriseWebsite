<?php

namespace App\Http\Controllers\Admin;

use App\Model\MenuModel;
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
        $map = $request->all();
        $newsModel = new NewsModel();
        $newList = $newsModel->pageQuery($map)->paginate(20);
        return view("admin.huniu.news",['newsList'=>$newList,"cdatas"=>$map]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view("admin.huniu.news.add");
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
        if (empty($map)){
            return back()->with("msg","<script>alert('信息填写不完整，请重新上传')</script>");
        }
        $news = NewsModel::create($map);
        if ($news){
            return back()->with("msg","<script>alert('上传成功')</script>");
        }else{
            return back()->with("msg","<script>alert('上传失败')</script>");
        }
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
        $menu = MenuModel::find($news->mode);
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
        $news = NewsModel::find($id);
        if (empty($news)){
            return back()->with("msg","<script>alert('信息不存在，请确认')</script>");
        }
        return view("admin.huniu.news.edit",["news"=>$news]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        $map = $request->all();
        if (empty($map)){
            return back()->with("msg","<script>alert('信息填写不完整，请重新上传')</script>");
        }
        $news = NewsModel::find($map["id"]);
        if (empty($news)){
            return back()->with("msg","<script>alert('信息不存在，请确认')</script>");
        }
        $update = $news->update($map);
        if ($update){
            return back()->with("msg","<script>alert('修改成功')</script>");
        }else{
            return back()->with("msg","<script>alert('修改失败')</script>");
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $news = NewsModel::find($id);
        if (empty($news)){
            return back()->with("msg","<script>alert('信息不存在，请确认')</script>");
        }
        $delete = $news->delete();
        if ($delete){
            return back()->with("msg","<script>alert('删除成功')</script>");
        }else{
            return back()->with("msg","<script>alert('删除失败')</script>");
        }
    }
}
