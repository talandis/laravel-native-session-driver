<?php

namespace Talandis\LaravelNativeSession;

use Talandis\LaravelNativeSession\NativeSessionManager;
use Illuminate\Session\SessionServiceProvider;

class NativeSessionServiceProvider extends SessionServiceProvider
{

    /**
     * Register the session manager instance.
     *
     * @return void
     */
    protected function registerSessionManager()
    {
        $this->app->singleton('session', function ($app) {
            return new NativeSessionManager($app);
        });
    }
}
