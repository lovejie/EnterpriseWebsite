<?php

namespace App\Http\Controllers\Admin;

use App\Model\ServersType;
use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class ServersTypeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $map = $request->all();
        $serverTypes = new  ServersType();

        $datas = $serverTypes->pageQuery($map)->paginate(20);
//        $datas = ServersType::paginate(20);

        return view("admin.huniu.serverstype",["datas"=>$datas,"cdatas"=>$map]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view("admin.huniu.serverstype.add");
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
        $datas = ServersType::create($map);
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
        $datas = ServersType::find($id);
        if (empty($datas)){
            return back()->with("msg","<script>alert('信息不存在，请确认')</script>");
        }
        return view("admin.huniu.serverstype.edit",["datas"=>$datas]);
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
        $data = ServersType::find($map["id"]);
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
        $data = ServersType::find($id);
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
