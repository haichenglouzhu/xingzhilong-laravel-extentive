<?php

namespace LarXing\Src;

use Illuminate\Support\ServiceProvider;

class LarServerProvider extends ServiceProvider
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
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->singleton('lar', function () {
            return new LarXingTest();
        });
    }
}
