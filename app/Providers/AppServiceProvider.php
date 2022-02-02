<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
   
    public function register()
    {
    
    }

    public function boot()
    {
        $loader = new \Twig\Loader\FilesystemLoader();
        $loader->addPath(base_path() . '/resources/components', 'components');
        $loader->addPath(base_path() . '/resources/layouts', 'layouts');
        \Twig::getLoader()->addLoader($loader);
    }
}
