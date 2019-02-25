@extends('layouts.app') 
@section('title', 'Movies') 
@section('content')

<h1 class="title">Available movies</h1>


<section class="section">
    <div class="container">

        <div class="field has-addons">
            <div class="control">
                <input class="input" type="text" placeholder="Find a movie">
            </div>
            <div class="control">
                <a class="button is-info">
                        Search
                      </a>
            </div>
        </div>

        @if (Auth::check() && auth()->user()->admin)

        <div class="column">
            <h1 class="title is-4"><a href="/movies/create" class="button is-link">New movie</a></h1>
        </div>

        @endif
    </div>
</section>


<div class="box">
    @foreach ($movies as $movie)
    <article class="media">
        <div class="media-left">
            <figure class="image is-64x64">
                <img src="https://bulma.io/images/placeholders/128x128.png" alt="Image">
            </figure>
        </div>
        <div class="media-content">
            <div class="content">
                <p class="title is-4 no-padding">{{ $movie->title }} </p>
                <p><span class="title is-6"><a href="movies/{{ $movie->id }}"> {{ $movie->genre['name'] }}</a></span></p>
            </div>
            <nav class="level is-mobile">
                <div class="level-left">
                    <a class="level-item" aria-label="reply">
                          <span class="icon is-small">
                            <i class="fas fa-reply" aria-hidden="true"></i>
                          </span>
                        </a>
                    <a class="level-item" aria-label="retweet">
                          <span class="icon is-small">
                            <i class="fas fa-retweet" aria-hidden="true"></i>
                          </span>
                        </a>
                    <a class="level-item" aria-label="like">
                          <span class="icon is-small">
                            <i class="fas fa-heart" aria-hidden="true"></i>
                          </span>
                        </a>
                </div>
            </nav>
        </div>
    </article>
    @endforeach
</div>
{{ $movies->links() }}
@endsection