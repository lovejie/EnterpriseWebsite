<?php

namespace App\Http\Controllers\Admin;

use App\Model\MenuModel;
use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;

class MenuController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $map = $request->all();
        $menusModel = new MenuModel();
        $menus =  $menusModel->pageQuery($map)->paginate(20);
//        $menus = MenuModel::paginate(20);
        return view("admin.huniu.menu",["menus"=>$menus]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
       return view("admin.huniu.menu.add");
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
        $datas = MenuModel::create($map);
        if ($datas){
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
        $datas = MenuModel::find($id);
        if (empty($datas)){
            return back()->with("msg","<script>alert('信息不存在，请确认')</script>");
        }
        return view("admin.huniu.menu.edit",["datas"=>$datas]);
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
        $data = MenuModel::find($map["id"]);
        if (empty($data)){
            return back()->with("msg","<script>alert('信息不存在，请确认')</script>");
        }
        $update = $data->update($map);
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
        $data = MenuModel::find($id);
        if (empty($data)){
            return back()->with("msg","<script>alert('信息不存在，请确认')</script>");
        }
        $delete = $data->delete();
        if ($delete){
            return back()->with("msg","<script>alert('删除成功')</script>");
        }else{
            return back()->with("msg","<script>alert('删除失败')</script>");
        }
    }
}
