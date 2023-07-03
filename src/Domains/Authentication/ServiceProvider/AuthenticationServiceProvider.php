<?php
namespace Domains\Authentication\ServiceProvider;

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
        Log::info(__DIR__ . '/../Routes/API/v1.php');
        $this->loadRoutesFrom(
            path: __DIR__ . '/../Routes/API/v1.php',
        );
    }
}
