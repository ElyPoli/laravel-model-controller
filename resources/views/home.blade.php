@extends('layouts.public')

@section('content')
    <div class="container">
        <h1>Movies</h1>
        <div class="row row-cols-4">
            @foreach ($moviesList as $movie)
                <div class="col">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">{{ $movie->title }}</h5>
                            <p class="card-text"> {{ $movie->original_title }} </p>
                            <p class="card-text"> {{ $movie->nationality }} </p>
                            <p class="card-text"> {{ $movie->date }} </p>
                            <p class="card-text"> {{ $movie->vote }} </p>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
@endsection
