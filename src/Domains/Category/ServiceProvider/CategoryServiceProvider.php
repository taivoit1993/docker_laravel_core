<?php

namespace Domains\Category\ServiceProvider;

use Domains\Category\Data\Repositories\Implement\CategoryRepository;
use Domains\Category\Data\Repositories\Interface\CategoryRepositoryInterface;
use Illuminate\Support\ServiceProvider;
use Laravel\Passport\Passport;

class CategoryServiceProvider extends ServiceProvider
{
    /**
     * @return void
     */
    public function boot(): void
    {
        $this->app->register(
            provider: CategoryServiceProvider::class,
        );
        Passport::ignoreRoutes();
        $this->registerRoutes();

    }

    /**
     * @return void
     */
    protected function registerRoutes(): void
    {
        $this->loadRoutesFrom(
            path: __DIR__ . '/../Routes/API/v1.php',
        );
    }

    public function register()
    {
        //Register User Repositories
        $this->app->singleton(
            CategoryRepositoryInterface::class,
            CategoryRepository::class
        );
    }
}
