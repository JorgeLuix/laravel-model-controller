@extends('layouts.app')

@section('content')
    <section class="container">
        <img src="{{ $movie->image }}" alt="{{ $movie->title }}">
        <h1>{{ $movie->title }}</h1>
        <p>{{ $movie->original_title }}</p>
        <p>{{ $movie->nationality }}</p>
        <p>{{ $movie->date }}</p>
    </section>
@endsection
