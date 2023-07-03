<?php
namespace Domains\Authentication\ServiceProvider;

use Domains\Authentication\Data\Repositories\Implement\UserRepository;
use Domains\Authentication\Data\Repositories\Interface\UserRepositoryInterface;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\ServiceProvider;

class AuthenticationServiceProvider extends ServiceProvider
{
    /**
     * @return void
     */
    public function boot(): void
    {
        $this->app->register(
            provider: AuthenticationServiceProvider::class,
        );

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
        app('config')
            ->set('custom', require app_path('/../Domains/Authentication/Configs/config.php'));
        //Register User Repositories
        $this->app->singleton(
            UserRepositoryInterface::class,
            UserRepository::class
        );
    }
}
