@extends('layouts.app') 
@section('title', 'Movies') 
@section('content')

<h1>Available movies</h1>
<div class="columns">
    <div class="column is-three-quarters">
        @foreach ($movies as $movie)
        <ul>
            <li>
                <a href="movies/{{ $movie->id }}">
                    {{ $movie->title }} 

                </a>
            </li>
            <li>

                {{ $movie->genre['name'] }}

            </li>
        </ul>
        @endforeach
    </div>

    @if (auth()->user()->admin)
    <div class="column">
        <h1 class="title is-4"><a href="/movies/create" class="button is-link">New movie</a></h1>
    </div>
    @endif
</div>
@endsection