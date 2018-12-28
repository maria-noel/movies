@extends('layouts.app')

@section('title', 'Movies')

@section('content')
    @foreach ($movies as $movie)
        <ul>
            <li>
                <a href="movie/{{ $movie->id }}">
                    {{ $movie->title }} 
                </a>
            </li>
        </ul>
    @endforeach

@endsection
