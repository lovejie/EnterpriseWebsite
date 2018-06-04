<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

/*Route::get('/', function () {
    return view('welcome');
});*/

Route::get('/',"IndexController@index");
Route::get('/annoucement',"NewsController@index");
Route::get('/annoucement/{mode}',"NewsController@index");
Route::get('/news/{id}',"NewsController@show");
Route::get('/vps',"IndexController@vps");
Route::get('/vps/desc',"IndexController@vpsDesc");
/**
 * API路由
 */
Route::group(['namespace'=>'Api','prefix' => 'api'],function (){

    Route::group(['prefix' => 'dict'],function (){
        //查询获取菜单树
        Route::get("/menu",'DictController@index');
        Route::get("/getMenusByCode",'DictController@selectByPcode');

    });

    Route::group(['prefix' => 'menu'],function (){
        //查询获取菜单树
        Route::post("/list",'MenuController@index');
        Route::get("/store",'MenuController@store');
        Route::get("/getMenusByCode",'MenuController@selectByPcode');
    });

});
// 认证路由...
Route::get('admin/login', 'Auth\AuthController@getLogin');
Route::post('admin/login', 'Auth\AuthController@postLogin');
Route::get('admin/logout', 'Auth\AuthController@getLogout');
/**
 * 后台管理路由
 */
Route::group(['namespace'=>'Admin','prefix' => 'admin',"middleware"=>"auth"],function (){
    Route::any("/",'IndexController@index');
    //菜单操作路由
    Route::group(['prefix' => 'menu'],function (){
        Route::any("/",'MenuController@index');
        Route::get("/add",'MenuController@create');
        Route::post("/store",'MenuController@store');
        Route::get("/edit/{id}",'MenuController@edit');
        Route::post("/update",'MenuController@update');
        Route::get("/del/{id}",'MenuController@destroy');
    });
    //公告类操作路由
    Route::group(['prefix' => 'news'],function (){

        Route::any("/",'NewsController@index');
        Route::get("/add",'NewsController@create');
        Route::post("/store",'NewsController@store');
        Route::get("/edit/{id}",'NewsController@edit');
        Route::post("/update",'NewsController@update');
        Route::get("/del/{id}",'NewsController@destroy');
    });
    //首页推荐操作路由
    Route::group(['prefix' => 'recommend'],function (){

        Route::any("/",'RecommendController@index');
        Route::get("/add",'RecommendController@create');
        Route::post("/store",'RecommendController@store');
        Route::get("/edit/{id}",'RecommendController@edit');
        Route::post("/update",'RecommendController@update');
        Route::get("/del/{id}",'RecommendController@destroy');
    });
    //服务器类操作路由
    Route::group(['prefix' => 'servers'],function (){

        Route::any("/",'ServersController@index');
        Route::get("/add",'ServersController@create');
        Route::post("/store",'ServersController@store');
        Route::get("/edit/{id}",'ServersController@edit');
        Route::post("/update",'ServersController@update');
        Route::get("/del/{id}",'ServersController@destroy');
    });
    //服务器机型操作路由
    Route::group(['prefix' => 'serverstype'],function (){

        Route::any("/",'ServersTypeController@index');
        Route::get("/add",'ServersTypeController@create');
        Route::post("/store",'ServersTypeController@store');
        Route::get("/edit/{id}",'ServersTypeController@edit');
        Route::post("/update",'ServersTypeController@update');
        Route::get("/del/{id}",'ServersTypeController@destroy');
    });
    Route::group(['namespace'=>'User','prefix' => 'user'],function (){
        //查询获取菜单树
        Route::get("/menu",'MenuController@index');
    });

});
