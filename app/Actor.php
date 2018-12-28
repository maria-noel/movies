<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Actor extends Model
{
    
    public function favoriteMovie()
    {
        return $this->hasOne(Movie::class);
    }


}
