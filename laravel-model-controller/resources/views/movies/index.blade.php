@extends('layouts.base')

@section('title', 'Movies')

@section('main-content')
    <main>
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <h1 class="p-5 text-center">Collezione Cinema di {{ $luke }}</h1>
                    @foreach ($movies as $movie)
                        <div class="card p-4 m-4" style="width: 18rem;">
                            <div class="card-body">
                                <h5 class="card-title mb-3">{{ $movie->title }}</h5>
                                <h6 class="card-subtitle mb-3">Titolo originale:<br>{{ $movie->original_title }}</h6>
                                <h6 class="card-subtitle mb-3 text-capitalize">Nazione:<br>{{ $movie->nationality }}</h6>
                                <h6 class="card-subtitle mb-3 ">Uscita: <br>{{ $movie->date }}</h6>
                                <h6 class="card-subtitle mb-3 ">Voto: <br>{{ $movie->vote }}</h6>
                                <p class="card-text">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Sapiente
                                    nemo eligendi repellat architecto nobis recusandae laudantium magni adipisci enim ipsum
                                    aliquam culpa explicabo esse, eos, veritatis at molestias odio sit?</p>
                                <a href="#" class="card-link">{{ $movie->title }}</a>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </main>
@endsection
