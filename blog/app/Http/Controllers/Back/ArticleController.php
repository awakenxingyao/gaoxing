<?php

namespace App\Http\Controllers\Back;


use App\Http\Controllers\Controller;
use App\Http\Requests\ArticleStore;
use App\Models\Article;
use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Gate;

class ArticleController extends Controller
{

    public function create(Request $request)
    {
        # 展示表单
        if ($request->isMethod('get')) {

            ## 获取分类
            $categories = Category::orderBy('sort')->get();

            ## 响应视图
            return view('Back.Article.create')
                ->with('categories', $categories)
                ;
        }

        # 入库数据
        elseif ($request->isMethod('post')) {
            // 手动注入ArticleStore
            app(ArticleStore::class);// 'App\Http\Requests\ArticleStore'

            # 创建并保存
            $article = Article::create($request->all()); // 已经save()了

            # 重定向到index
            return redirect()->route('articleIndex');
        }
    }


    public function index()
    {
//        dump(config('app.locale'));
//        dump(Auth::user()->name);
//        if (! Gate::allows('article-list')) {
//            return redirect()->route('home');
//        }

        # 获取分页数据
        $limit = 2;
        $articles = Article::orderBy('updated_at', 'desc')->paginate($limit);

        # 响应视图
        return view('Back.Article.index')
            ->with('articles', $articles)
//            ->with('user', Auth::user())
            ;
    }


    public function delete($id)
    {
        # 删除
        $article = Article::find($id);
        $article->delete();

        # 重定向到列表
        return redirect()->route('articleIndex');
    }


    public function trash()
    {
        # 获取分页数据
        $limit = 2;
        $articles = Article::onlyTrashed()->orderBy('deleted_at', 'desc')->paginate($limit);

        # 响应视图
        return view('Back.Article.trash')
            ->with('articles', $articles)
            ;
    }

    public function restore($id)
    {
        # 还原
        $article = Article::withTrashed()->find($id);
        $article->restore();

        # 重定向到列表
        return redirect()->route('articleIndex');

    }

    public function forceDelete($id)
    {
        # 还原
        $article = Article::withTrashed()->find($id);
        $article->forceDelete();

        # 重定向到列表
        return redirect()->route('articleTrash');

    }

    public function edit($id)
    {
        $article = Article::find($id);

        # 授权校验
//        if (! Gate::allows('article-edit', $article)) {
        if (Auth::user()->cant('update', $article)) {
            return redirect()->route('home');
        }

        ## 获取分类
        $categories = Category::orderBy('sort')->get();

        return view('Back.Article.edit')
            ->with('article', $article)
            ->with('categories', $categories)
            ;
    }

    public function update(ArticleStore $request ,$id)
    {
        # 更新数据
        $article = Article::find($id);
        // 批量赋值，填充数据（白名单）
        $article->fill($request->all());

        # 图像信息
        if ($request->hasFile('cover') && $request->file('cover')->isValid()) {
            $article->cover = $request->cover->store('articles', 'thumb');
        }
        $article->save();

        # 重定向到列表
        return redirect()->route('articleIndex');

    }


}