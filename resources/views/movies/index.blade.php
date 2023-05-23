@extends('layouts.app')

@section('content')
    <section class="container">
        <h1>Home page</h1>
        <ul>
            @foreach ($movies as $movie)
                <li><a href="{{ route('movies.show', ['id' => $movie->id]) }}">
                    {{ $movie->title }}</a></li>
            @endforeach
        </ul>
    </section>
@endsection
