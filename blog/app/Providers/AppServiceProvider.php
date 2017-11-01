<?php

namespace App\Providers;

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        //
        // 动态配置语言
        config([
            'app.locale' => request()->input('lang', config('app.locale'))
        ]);

        // 视图共享数据
        view()->share('name', 'Kang');// 可以的
//        dump(Auth::user());
//        view()->share('user', Auth::user()); // 不行的，
        // composer视图编辑器的注册
        // 针对于2个模板
        view()->composer([
            'Back.header', 'Back.left'
        ], 'App\\Composers\\UserComposer');
    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }
}
