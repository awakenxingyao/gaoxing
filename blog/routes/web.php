<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('Front.index');
})->name('index');


# 后台路由组
Route::group([
    'prefix' => 'back',
    'namespace' => 'Back',
    'middleware' => ['auth'], // 路由中间件
], function() {
    ## 控制面板
    Route::get('dashboard', 'ManageController@dashboard')->name('dashboard');

    ## 文章索引页（列表）
    Route::get('article', 'ArticleController@index')->name('articleIndex');
    ## 软删除文章
    Route::get('article-delete-{id}', 'ArticleController@delete')->name('articleDelete');
    ## 回收站
    Route::get('article-trash', 'ArticleController@trash')->name('articleTrash');
    ## 还原
    Route::get('article-restore-{id}', 'ArticleController@restore')->name('articleRestore');
    ## 彻底删除
    Route::get('article-force-delete-{id}', 'ArticleController@forceDelete')->name('articleForceDelete');

    ## 创建文章
    Route::match(['get', 'post'], 'article-create', 'ArticleController@create')->name('articleCreate');

    ## 编辑表单
    Route::get('article-edit-{id}', 'ArticleController@edit')->name('articleEdit');
    ## 更新数据
    Route::post('article-update-{id}', 'ArticleController@update')->name('articleUpdate');

});


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
