@extends('layouts.app') 
@section('title', 'Movies | Show ') 
@section('section-title', 'Movie info') 
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
                    <strong>{{ $movie->title }} </strong>
                </p>
                <p>
                    <span class="tag"> Rating </span> {{ $movie->rating }}
                    <span class="tag"> Awards </span> {{ $movie->awards }}

                </p>

                @if ($movie->genre)
                <p>
                    <span class=""> <a href="/genres/{{ $movie->genre['id'] }}">{{ $movie->genre['name'] }}</a></span>
                </p>
                @endif @if ($movie->actors->count())
                <ul>

                    @foreach ($movie->actors as $actor)
                    <li>
                        {{ $actor->first_name }} {{ $actor->last_name }}
                    </li>
                    @endforeach
                </ul>
                @endif
            </div>

        </div>
        @if (auth()->user()->admin)
        <h6><a href="/movies/{{ $movie->id }}/edit" class="button is-link">Edit</a> </h6>
        @endif
    </article>
</div>
@endsection