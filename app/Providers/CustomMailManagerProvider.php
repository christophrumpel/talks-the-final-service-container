<?php

namespace App\Providers;

use App\Support\CustomMailManager;
use Illuminate\Mail\MailServiceProvider;

class CustomMailManagerProvider extends MailServiceProvider
{
    /**
     * Register the Illuminate mailer instance.
     *
     * @return void
     */
    protected function registerIlluminateMailer(): void
    {
        $this->app->singleton('mail.manager', function($app) {
            return new CustomMailManager($app);
        });

        // Copied from Illuminate\Mail\MailServiceProvider
        $this->app->bind('mailer', function ($app) {
            return $app->make('mail.manager')->mailer();
        });
    }

}