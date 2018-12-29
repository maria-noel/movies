@extends('layouts.app')

@section('title', 'Actors')

@section('content')
    @foreach ($actors as $actor)
        <ul>
            <li>
                <a href="actor/{{ $actor->id }}">
                    {{ $actor->first_name }} {{ $actor->last_name }}
                </a>
            </li>
        </ul>
    @endforeach

@endsection
