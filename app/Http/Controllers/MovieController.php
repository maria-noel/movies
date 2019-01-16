<?php

namespace App\Http\Controllers;

use App\Genre;
use App\Mail\MovieCreated;
use App\Movie;
use Illuminate\Http\Request;

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

        // $this->middleware(['admin', 'auth'], ['except' => ['index', 'show']]);
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $movies = Movie::all();

        // cache()->rememberForever('stats', function(){
        //     return ['lessons' => 1300, 'hours' => 5000, 'series' => 100];
        // });
        // $stats = cache()->get('stats');

        // dump($stats);

        return view('movies/index', compact('movies'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        // dd('create');

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

        // validate
        $attributes = request()->validate([
            'title' => ['required', 'min:3'],
            'rating' => ['nullable', 'numeric'],
            'awards' => ['nullable', 'numeric'],
            'length' => ['nullable', 'numeric'],
            'genre_id' => ['nullable', 'numeric'],
            'release_date' => ['required', 'date'],

        ]);

        $movie = Movie::create($attributes);

        \Mail::to('bacodesign@gmail.com')->send(
            new MovieCreated($movie)
        );

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
    public function update(Request $request, $id)
    {
        //
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
}
