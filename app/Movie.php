<?php

namespace App;

use App\Mail\MovieCreated;
use Illuminate\Support\Facades\Mail;
use Illuminate\Database\Eloquent\Model;
use App\Events\MovieCreated as MovieCreatedEvent;

class Movie extends Model
{
    protected $guarded = [];
    
    protected $dispatchesEvents = [
        'created' => MovieCreatedEvent::class,
    ];


    public function genre()
    {
        return $this->belongsTo('App\Genre');
    }
    

    public function actors()
    {
        return $this->belongsToMany(Actor::class);
    }

}
