<?php

namespace App\Providers;

use App\Events\NewsEditedEvent;
use App\Listeners\LastLoginListener;
use App\Listeners\NewsEditedListener;
use Illuminate\Auth\Events\Registered;
use Illuminate\Auth\Listeners\SendEmailVerificationNotification;
use Illuminate\Foundation\Support\Providers\EventServiceProvider as ServiceProvider;
use Illuminate\Support\Facades\Event;

class EventServiceProvider extends ServiceProvider
{
    /**
     * The event listener mappings for the application.
     *
     * @var array
     */
    protected $listen = [
        Registered::class => [
            SendEmailVerificationNotification::class,
        ],
		'Illuminate\Auth\Events\Authenticated' => [
			LastLoginListener::class,
		],
		NewsEditedEvent::class => [
			NewsEditedListener::class
		],
		\SocialiteProviders\Manager\SocialiteWasCalled::class => [
			// add your listeners (aka providers) here
			'SocialiteProviders\\VKontakte\\VKontakteExtendSocialite@handle',
		],
    ];

    /**
     * Register any events for your application.
     *
     * @return void
     */
    public function boot()
    {
        parent::boot();

        //
    }
}
