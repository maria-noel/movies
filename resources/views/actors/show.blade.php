@extends('layouts.app')

@section('title', 'Actors')

@section('content')

<h1>{{ $actor->first_name }} {{ $actor->last_name }}</h1>

<h4>{{ $actor->rating }}</h4>

<h4>{{ $actor->favorite_movie_id }}</h4>

@endsection
