<?php

namespace amiretemad\mirzachallenge;

use Illuminate\Support\ServiceProvider;

class mirzaChallangeServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot()
    {
      // Load Migration Files
      $this->loadMigrationsFrom(__DIR__.'/Migrations');
      // Configure Router Path
      include __DIR__.'/routes.php';
    }

    /**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {
      // Register Controller
      $this->app->make('amiretemad\mirzachallenge\Controllers\mainController');
      // Set Path Of view Files
      $this->loadViewsFrom(__DIR__.'/views','mirzachallenge');
    }
}
