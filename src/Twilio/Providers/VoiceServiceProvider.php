<?php

namespace ColoredCow\Twilio\Providers;

use Illuminate\Support\Facades\App;
use Illuminate\Support\ServiceProvider;

class VoiceServiceProvider extends ServiceProvider
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
        App::bind('voice', function()
        {
            return new \myocuhub\Services\Twilio\TwilioVoice;
        });
    }
}
