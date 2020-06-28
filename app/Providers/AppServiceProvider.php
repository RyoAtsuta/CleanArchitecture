<?php

namespace App\Providers;

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
        $this->app->bind(\App\UseCases\Book\BookCreateInputPortInterface::class, \App\UseCases\Book\BookCreateInteractor::class);
        $this->app->bind(\App\Presenters\Book\BookCreateOutputPortInterface::class, \App\Presenters\Book\BookCreatePresenter::class);
        $this->app->bind(\App\UseCases\Book\BookIndexInputPortInterface::class, \App\UseCases\Book\BookIndexInteractor::class);
        $this->app->bind(\App\Presenters\Book\BookIndexOutputPortInterface::class, \App\Presenters\Book\BookIndexPresenter::class);
    }
}
