@extends('layouts.app')

@section('content')
    <section class="container">
        <h1>Home page</h1>
        <p>Hello world</p>
        <a href="{{ route('movies.index') }}">Vai alla lista dei movie</a>
        {{-- <a href="{{ route('movies.show') }}">Vai alla lista dei movie</a> --}}
    </section>
@endsection
