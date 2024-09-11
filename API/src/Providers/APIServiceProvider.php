<?php

namespace API\Providers;

use API\Support\Services\APIResponse\JsonResponder;
use Illuminate\Support\ServiceProvider;

class APIServiceProvider extends ServiceProvider
{
    public function register()
    {
        $this->app->register(RouteServiceProvider::class);
        $this->app->singleton('api-responder', static function () {
            return new JsonResponder();
        });
    }

    public function boot()
    {

    }
}
