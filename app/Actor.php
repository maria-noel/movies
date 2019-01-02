<?php

namespace App;

use Illuminate\Database\Eloquent\Model;


class Actor extends Model
{

    protected $fillable = ['first_name', 'last_name'];

    public function movies(){
        return $this->belongsToMany(Movie::class);
    }

    
}
