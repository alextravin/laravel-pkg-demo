<?php

namespace AlexTravin\SkillsTest;

use Illuminate\Support\ServiceProvider;

class PhptestServiceProvider extends ServiceProvider
{
    public function boot(){
        $this->loadRoutesFrom(__DIR__.'/../routes/web.php');
        $this->loadViewsFrom(__DIR__.'/../views','packageTest');

        $this->publishes([
            __DIR__.'/../config/app.php' => config_path('phpTests.php')
        ],'phpTestsConfig');

    }
}
