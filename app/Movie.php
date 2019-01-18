<?php

namespace App;

use App\Mail\MovieCreated;
use Illuminate\Support\Facades\Mail;
use Illuminate\Database\Eloquent\Model;

class Movie extends Model
{
    protected $guarded = [];

    protected static function boot()
    {
        parent::boot();

        static::created(function($movie){
            Mail::to('bacodesign@gmail.com')->send(
                new MovieCreated($movie)
            );
    
        });
    }
    
    public function genre()
    {
        return $this->belongsTo('App\Genre');
    }
    

    public function actors()
    {
        return $this->belongsToMany(Actor::class);
    }

}
