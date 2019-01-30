<?php

namespace App\Http\Controllers;

use App\Genre;
use App\Mail\MovieCreated;
use App\Events\MovieCreated as movieCreatedEvent;
use App\Movie;
use Illuminate\Http\Request;
use App\Notifications\MovieCreationFailed;
use App\User;

class MovieController extends Controller
{

    protected $dates = [
        'release_date',
    ];

    /**
     * Enforce middleware
     */
    public function __construct()
    {
        $this->middleware(['admin', 'auth'], ['only' => ['create', 'store', 'edit', 'delete']]);

        $this->middleware(['admin', 'auth'], ['except' => ['index', 'show']]);
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $user = User::first();
        
        $user->notify(new MovieCreationFailed);

        $movies = Movie::all();

        return view('movies/index', compact('movies'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

        $genres = Genre::all();

        return view('movies/create', ['genres' => $genres]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $movie = Movie::create($this->validateMovie());

        return redirect('/movies');

    }

    /**
     * Shows a particular movie
     *
     * @param [int] $id
     * @return void
     */
    public function show($id)
    {


        if (! isset($id)) {
            return redirect('/movies');
        }

        $movie = Movie::find($id);

        return view('movies/show', compact('movie'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $movie = Movie::find($id);
        $genres = Genre::all();

        return view('movies/edit', compact('movie', 'genres'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Movie $movie)
    {
        
        $movie->update($this->validateMovie());

        return redirect('/movies');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $movie = Movie::find($id);

        $movie->delete($id);

        return redirect('/movies');

    }


    protected function validateMovie()
    {
        return request()->validate([
            'title' => ['required', 'min:3'],
            'rating' => ['nullable', 'numeric'],
            'awards' => ['nullable', 'numeric'],
            'length' => ['nullable', 'numeric'],
            'genre_id' => ['nullable', 'numeric'],
            'release_date' => ['required', 'date'],
        ]);
    }


}
