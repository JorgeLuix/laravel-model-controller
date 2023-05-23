@extends('layouts.app')

@section('content')
    <section class="container">
        <h1>Lista Movie</h1>
        <ul class="list-group">
            @foreach ($movies as $movie)
                <li class="list-group-item"><a class="movie-link" href="{{ route('movies.show', ['id' => $movie->id]) }}">
                    {{ $movie->title }}

                </a></li>

            @endforeach
        </ul>
    </section>
@endsection
<style>
.movie-link {
    color: #007bff;
    transition: all 0.3s ease;

    &:hover {
        color: #0056b3;
        text-decoration: none;
    }
}

.list-group-item {
    display: flex;
    align-items: center;
    justify-content: space-between;
    border: none;
    transition: all 0.3s ease;

    &:hover {
        background-color: #f8f9fa;
        cursor: pointer;
    }
}

</style>
