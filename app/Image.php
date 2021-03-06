<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Image extends Model
{
    protected $fillable = ['src'];

    //
    public function actors()
    {
        return $this->belongsToMany('App\Actor')->withTimestamps();
    }

    public function movies()
    {
        return $this->belongsToMany('App\Movie')->withTimestamps();
    }
}
