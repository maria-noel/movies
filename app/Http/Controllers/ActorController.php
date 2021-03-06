<?php

namespace App\Http\Controllers;

use App\Actor;

use App\Movie;use Illuminate\Http\Request;

class ActorController extends Controller
{

    /**
     * Enforce middleware
     */
    public function __construct()
    {
        $this->middleware('auth', ['only' => ['create', 'store', 'edit', 'delete']]);

        $this->middleware('auth', ['except' => ['index', 'show']]);
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $actors = Actor::all();

        return view('actors/index', compact('actors'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $movies = Movie::all();
        return view('actors/create', compact('movies'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store()
    {
        // validate
        $attributes = request()->validate([
            'first_name' => ['required', 'string', 'min:3', 'max:100'],
            'last_name' => ['required', 'string', 'min:3', 'max:100'],
            'rating' => ['nullable', 'numeric'],
            'favorite_movie_id' => ['nullable', 'numeric'],
        ]);

        Actor::create($attributes);

        return redirect('/actors');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $actor = Actor::find($id);
        $favorite_movie = Movie::find($actor->favorite_movie_id);
        $movies = Movie::all();
        return view('actors/show', compact(['actor', 'movies', 'favorite_movie']));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $actor = Actor::find($id);
        $allMovies = Movie::all();
        return view('actors/edit', compact(['actor', 'allMovies']));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update($id)
    {
        $actor = Actor::find($id);

        $actor->first_name = request('first_name');
        $actor->last_name = request('last_name');
        $actor->rating = request('rating');

        $actor->favorite_movie_id = request('favorite_movie_id');

        $actor->save();
        $actor->movies()->sync(request('movies'));

        return redirect('/actors');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $actor = Actor::find($id);

        $actor->delete($id);

        return redirect('/actors');

    }

    public function getFavoriteMovie()
    {
        return $this->favoriteMovie($this->favorite_movie_id);
    }
}
