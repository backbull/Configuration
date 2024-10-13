<?php

namespace Configuration;

use Illuminate\Support\ServiceProvider;
use Illuminate\Routing\Router;
use Configuration\Http\Middlewares\IsAdmin;

class InstallerServiceProvider extends ServiceProvider
{
    public function boot(Router $router)
    {
        $this->loadViewsFrom(__DIR__ . '/views', 'Installer');
        $router->middlewareGroup('isAdmin', [IsAdmin::class]);
        $this->loadRoutesFrom(__DIR__ . '/Routes/web.php');
    }
    public function register() {}
};
