@extends('layouts.public')

@section('content')
    <div class="main-home d-flex align-items-center justify-content-center">
        <div class="container text-center text-white pb-4">
            <h1 class="pb-4 pt-4">Movies</h1>
            <div class="row row-cols-2 row-cols-md-3 gy-4">
                @foreach ($moviesList as $movie)
                    <div class="col">
                        <div class="card">
                            <div class="card-body">
                                <h5 class="card-title">{{ $movie->title }}</h5>
                                <ul class="list-unstyled card-text">
                                    <li> <span class="fw-bold">-> Titolo originale: </span>{{ $movie->original_title }} </li>
                                    <li> <span class="fw-bold">-> Nazionalità del film: </span>{{ $movie->nationality }} </li>
                                    <li> <span class="fw-bold">-> Data di uscita: </span>{{ $movie->date }} </li>
                                    <li> <span class="fw-bold">-> Voto: </span>{{ $movie->vote }} </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
@endsection
