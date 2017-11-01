<?php

namespace App\Providers;

use Illuminate\Support\Facades\Gate;
use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;

class AuthServiceProvider extends ServiceProvider
{
    /**
     * The policy mappings for the application.
     *
     * @var array
     */
    protected $policies = [
        'App\Model' => 'App\Policies\ModelPolicy',
//        'App\\Models\\Article' => 'App\\Policies\\ArticlePolicy',
        'App\Models\Article' => 'App\Policies\ArticlePolicy',
    ];

    /**
     * Register any authentication / authorization services.
     *
     * @return void
     */
    public function boot()
    {
        $this->registerPolicies();
//
//        // 定义关卡权限
//        Gate::define('article-list', function($user) {
////            $user, 当前的认证用户
////            return true, false;
//            # 校验当前用户是否能够满足article-list的校验，
//            # 校验的依据，可以利用RBAC将其存储， 用户和article-list的映射关系。
//
//            return !! mt_rand(0, 1);// 随机返回权限 true false
//        });
//
//        Gate::define('article-edit', function($user, $article) {
////            $user, 当前的认证用户
////            $article, 执行认证时传递的模型对象
//            // 前面同时需要去校验 当前user是否有权限执行文章的编辑
//            return $user->id == $article->user_id;
//        });
    }
}
