@extends('layouts.app') 
@section('title', 'Actors | Create ') 
@section('section-title', 'View a particular actor/actress
') 
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
                    <strong>{{ $actor->first_name }} </strong> <small>{{ $actor->last_name }}</small>
                </p>
                <p>
                    <span class="tag"> Rating </span> {{ $actor->rating }}

                </p>

                @if ($actor->favorite_movie_id)
                <div>
                    <ul> Favorite movie:
                        <li>
                            <a href="/movies/{{ $favorite_movie->id }}">{{ $favorite_movie->title }}</a>
                        </li>
                    </ul>
                </div>
                @endif @if ($actor->movies->count())
                <div>
                    <ul> Actuó en: @foreach ($actor->movies as $movie)
                        <li>
                            <a href="/movies/{{ $movie->id }}"> {{ $movie->title }} </a>
                        </li>
                        @endforeach
                    </ul>
                </div>
                @endif
            </div>

        </div>
        <h6><a href="/actors/{{ $actor->id }}/edit" class="button is-link">Edit</a> </h6>
    </article>
</div>
@endsection