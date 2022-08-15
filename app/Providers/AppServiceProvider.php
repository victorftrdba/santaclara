<?php

namespace App\Providers;

use App\Models\User;
use App\View\Components\Alert;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Blade;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\ServiceProvider;

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
        Schema::defaultStringLength(191);

        view()->composer("master.master", function ($view) {
            $user = User::find(Auth::id());
            $view->with("user", $user);
        });

        Blade::component(Alert::class, "alert");
    }
}