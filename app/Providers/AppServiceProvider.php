<?php

namespace App\Providers;

use App\Models\Team;
use Illuminate\Pagination\Paginator;
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
        Paginator::useBootstrapFive();

        view()->composer(
            'layouts.master',
            function ($view) {
                $view->with('teams', Team::all());
            }
        );
    }
}
