<?php

namespace App\Providers;

use App\Models\Post;
use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\View;
use Illuminate\Support\Facades\Route;
class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        // \Illuminate\Support\Facades\Schema::defaultStringLength(191);

        View::composer(['components.site.seo'], function ($view) {
            $currentPath = Route::getFacadeRoot()->current()->action['as'];

            $slug = last(request()->segments());

            $post = Post::where('slug', $slug)->first();

            if($post)
            {
                return $view->with('currentPath', $currentPath)->with('post', $post);
            }

            return $view->with('currentPath', $currentPath);
        });
    }
}
