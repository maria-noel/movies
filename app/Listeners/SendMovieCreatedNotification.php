<?php

namespace App\Listeners;

use App\Events\MovieCreated;
use App\Mail\MovieCreated as MovieCreatedMail;
use Illuminate\Support\Facades\Mail;

class SendMovieCreatedNotification
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
     * @param  MovieCreated  $event
     * @return void
     */
    public function handle(MovieCreated $event)
    {
        Mail::to(('bacodesign@gmail.com'))->send(
            new MovieCreatedMail($event->movie)
        );
    }
}
