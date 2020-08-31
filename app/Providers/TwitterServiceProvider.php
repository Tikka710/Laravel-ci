<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Abraham\TwitterOAuth\TwitterOAuth;

class TwitterServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
     protected $defer = true;

    public function register()
    {
      $this->app->singleton('twitter', function () {

          $config = config('twitter');

          return new TwitterOAuth($config['api_key'], $config['secret_key'], $config['access_token'], $config['access_token_secret']);

      });
    }

    public function provides()
    {
        return ['twitter'];
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }
}
