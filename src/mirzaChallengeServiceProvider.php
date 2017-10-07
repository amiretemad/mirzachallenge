<?php

namespace amiretemad\mirzachallenge;

use Illuminate\Support\ServiceProvider;

class mirzaChallengeServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot()
    {
      // define package database migration file path
      $this->loadMigrationsFrom(__DIR__.'/Migrations');
      // define package router path
      include __DIR__.'/routes.php';
    }

    /**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {
      // Register package Controller
      $this->app->make('amiretemad\mirzachallenge\Controllers\mainController');
      // define package view files path
      $this->loadViewsFrom(__DIR__.'/views','mirzachallenge');
    }
}
