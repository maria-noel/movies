@extends('layouts.app') 
@section('title', 'Actors') 
@section('content')

<div class="columns">
    <div class="column is-three-quarters">
        <ul>
            @foreach ($actors as $actor)
            <li>
                <a href="actors/{{ $actor->id }}">
                    {{ $actor->first_name }} {{ $actor->last_name }}
                </a>
            </li>
            @endforeach
        </ul>
    </div>
    
    @if (Auth::check() && auth()->user()->admin)
    <div class="column">
        <h1 class="title is-4"><a href="/actors/create" class="button is-link">New actor/actress</a></h1>
    </div>
    @endif
</div>
@endsection