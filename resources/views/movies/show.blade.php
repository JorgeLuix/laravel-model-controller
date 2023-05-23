@extends('layouts.app')

@section('content')
    <div class="container ">
        <div class="row p-5">
            <a href="{{ route('movies.index') }}">
                Torna indietro

            </a>
        <div class="jc-card">
            <img src="{{ $movie->image }}" alt="{{ $movie->title }}">
            <div class="card-body">
                <h1 class="card-title">{{ $movie->title }}</h1>
                <p class="card-subtitle">{{ $movie->original_title }}</p>
                <p class="card-subtitle">{{ $movie->nationality }}</p>
                <p class="card-subtitle">{{ $movie->date }}</p>
            </div>
        </div>
    </div>
    </div>
@endsection

<style lang="scss">

    .jc-card {
      width: 100%;
        height: 50% !important
      transition: all ease 0.4s;
      border-radius: 5px;

      .card-body {
        display: flex;
        flex-direction: column;
        justify-content: space-between;
        padding: 1rem;
        color: white;
      }
      .card-title {
        font-size: 2rem;
        font-weight: bold;
        margin-bottom: 0.5rem;
        white-space: wrap;
        overflow: hidden;
        text-overflow: ellipsis;
        text-align: center;
      }
      .card-subtitle {
        font-size: 1rem;
        margin-bottom: 0.5rem;
        text-align: center;
      }

    }
    .jc-card:hover{
        cursor: pointer;
        background-color:  #252525;
      }
      .jc-card img{
        width: 100%;
        border-radius: 8px;
        padding-top: 8px;
      }

    </style>
