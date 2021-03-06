<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Blog;
use View;
class ComposerServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
	View::composer(['partials.meta_dinamic','layouts.nav'],function($view){
	   $view->with('blog',Blog::latest()->get());
	});
   }

    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        //
    }
}
