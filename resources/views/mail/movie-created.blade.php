@component('mail::message')
# The movie {{ $movie->title }} was created

Details: <br>
&mdash; Rating: {{ $movie->rating }} <br>
&mdash; Genre: {{ $movie->genre->name }}


@component('mail::button', ['url' => url('movies/'. $movie->id )])
View Movie
@endcomponent

Thanks,<br>
{{ config('app.name') }}
@endcomponent
