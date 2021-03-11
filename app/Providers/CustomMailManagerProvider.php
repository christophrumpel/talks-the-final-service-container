<?php

namespace App\Providers;

use App\Support\CustomMailManager;
use Illuminate\Support\ServiceProvider;

class CustomMailManagerProvider extends ServiceProvider
{
    /**
     * Register my custom mailer instance.
     */
    public function register(): void
    {
        // Same as Illuminate\Mail\MailServiceProvider
        $this->app->singleton('mail.manager', function($app) {
            return new CustomMailManager($app);
        });

        $this->app->bind('mailer', function ($app) {
            return $app->make('mail.manager')->mailer();
        });
    }
}
