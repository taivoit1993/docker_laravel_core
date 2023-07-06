<?php
namespace Domains\Posts\ServiceProvider;

use Domains\Authentication\Data\Repositories\Implement\UserRepository;
use Domains\Authentication\Data\Repositories\Interface\UserRepositoryInterface;
use Illuminate\Support\ServiceProvider;
use Laravel\Passport\Passport;

class PostServiceProvider extends ServiceProvider
{
    /**
     * @return void
     */
    public function boot(): void
    {
        $this->app->register(
            provider: PostServiceProvider::class,
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
            UserRepositoryInterface::class,
            UserRepository::class
        );
    }
}
