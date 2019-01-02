@extends('layouts.app') 
@section('title', 'Genres ') 
@section('section-title', 'Genre') 
@section('content')

<div class="box">
    <article class="media">
        <div class="media-left">
            <figure class="image is-64x64">
                <img src="https://bulma.io/images/placeholders/128x128.png" alt="Image">
            </figure>
        </div>
        <div class="media-content">
            <div class="content">
                <p>
                    <strong>{{ $genre->name }} </strong> 
                </p>
                <p>
                    <span class="tag"> Ranking </span> {{ $genre->ranking }}
                </p>

                Related movies:
                <ul>

                @foreach($genre->movies as $movie)
                <li><a href="/movies/{{ $movie->id }}">{{ $movie->title }}</a></li>
                @endforeach
                </ul>
            </div>

        </div>
        
    </article>
</div>
@endsection