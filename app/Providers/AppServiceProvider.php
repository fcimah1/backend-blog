<?php

namespace App\Providers;

use App\Repository\CategoryRepository;
use App\Repository\Interface\ICategoryRepository;
use App\Repository\Interface\IPostRepository;
use App\Repository\PostRepository;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
        $this->app->singleton(ICategoryRepository::class, CategoryRepository::class);
        $this->app->singleton(IPostRepository::class, PostRepository::class);
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        //
    }
}
