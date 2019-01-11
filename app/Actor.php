<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Movie;

class Actor extends Model
{

    protected $fillable = ['first_name', 'last_name'];

    public function movies(){
        return $this->belongsToMany(Movie::class);
    }

    
    public function favoriteMovieTitle($id)
    {
        $movie = Movie::find($id);

        if ($movie) {
            return $movie->title;
        }

    }    
}
