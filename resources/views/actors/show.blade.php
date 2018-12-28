@extends('layouts.app')

@section('title', 'Actors')

@section('content')
{{ dd($actor->movies) }}

<h1>{{ $actor->first_name }} {{ $actor->last_name }}</h1>

<h4>{{ $actor->rating }}</h4>

<h4>{{ $actor->pivot->movies }}</h4>

@endsection
