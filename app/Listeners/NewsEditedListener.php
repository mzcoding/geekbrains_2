<?php

namespace App\Listeners;

use App\Models\News;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;

class NewsEditedListener
{
    /**
     * Create the event listener.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * Handle the event.
     *
     * @param  object  $event
     * @return void
     */
    public function handle($event)
    {
        if(isset($event->news) && $event->news instanceof News) {
        	$news = $event->news;
        	$news->status = 'published';
        	$news->save();
		}
    }
}
