<?php

namespace App\Http\Controllers\Admin;

use App\Model\Recommend;
use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class RecommendController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $map = $request->all();
        $recommendModel = new Recommend();
        $datas = $recommendModel->pageQuery($map)->paginate(20);
        return view("admin.huniu.recommend",["datas"=>$datas,"cdatas"=>$map]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view("admin.huniu.recommend.add");
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
        $img = $request->file("img");
        if (!empty($img)) {
            $map["img"] = $this->upload_file($img);
        }
        $datas = Recommend::create($map);
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
        $datas = Recommend::find($id);
        if (empty($datas)){
            return back()->with("msg","<script>alert('信息不存在，请确认')</script>");
        }
        return view("admin.huniu.recommend.edit",["datas"=>$datas]);
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
        $img = $request->file("editimg");
        if (!empty($img)){
            $map["img"] = $this->upload_file($img);
        }
        $data = Recommend::find($map["id"]);
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
        $data = Recommend::find($id);
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

    /**
     * 文件上传到服务器 .
     * 参数  文件 $file = $request->file('banaer_file');
     * 返回文件存储路径
     */
    public function upload_file($file)
    {
        // 文件是否上传成功
        if ($file->isValid()) {
            // 获取文件相关信息
            $originalName = $file->getClientOriginalName(); // 文件原名
            $ext = $file->getClientOriginalExtension();     // 扩展名
            $realPath = $file->getRealPath();   //临时文件的绝对路径
            $type = $file->getClientMimeType();     // image/jpeg
            $entension = $file -> getClientOriginalExtension();

            // 上传文件
            $filename = date('Y-m-d-H-i-s') . '-' . uniqid() . '.' . $ext;
            // 使用我们新建的uploads本地存储空间（目录）
            $path = '/uploades/'.date('Y-m-d',time()).'/'.$entension;
            $bool = $file->move(public_path().$path,$filename);
            return $path.'/'.$filename;
        }

    }
}