<?php

namespace Longzhan\Auth2;

use Illuminate\Support\ServiceProvider;

class Auth2ServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }

    /**
     * 注册服务提供者。
     *
     * @return void
     */
    public function register()
    {
        $this->app->singleton('Auth2', function ($app) {
            return new Auth2();
        });
    }

    /**
     * 获取提供者所提供的服务。
     *
     * @return array
     */
    public function provides()
    {
        return ['Auth2'];
    }
}
