<?php

namespace App\Providers;

use App\Support\Directory;
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
        // モジュールディレクトリ
        $modules = Directory::listDirectories(app_path('Modules'));

        foreach ($modules as $module) {
            $routesPath = app_path('Modules/' . $module . '/routes.php');
            $viewsPath = app_path('Modules/' . $module . '/Views');

            if (file_exists($routesPath)) {
                require $routesPath;
            }

            if (file_exists($viewsPath)) {
                $this->app->view->addLocation($viewsPath);
            }
        }
    }
}
