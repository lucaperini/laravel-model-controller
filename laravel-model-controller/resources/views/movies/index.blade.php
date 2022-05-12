@extends('layouts.base')

@section('title', 'Movies')

@section('main-content')
    <main>
        <div class="container mb-5">
            <div class="row">
                <div class="col-12">
                    <h1 class="p-5 text-center">{{ $luke }}'s Movies Db</h1>
                    @foreach ($movies as $movie)
                        <div class="card  m-2" style="width: 18rem; display:inline-block ">
                            <div class="card-body mb-5">
                                <h5 class="card-title mb-3">{{ $movie->title }}</h5>
                                <h6 class="card-subtitle mb-3">Original Title:<br>{{ $movie->original_title }}</h6>
                                <h6 class="card-subtitle mb-3 text-capitalize">Nationality:<br>{{ $movie->nationality }}</h6>
                                <h6 class="card-subtitle mb-3 ">Date: <br>{{ $movie->date }}</h6>
                                <h6 class="card-subtitle mb-3 ">Vote: <br>{{ $movie->vote }}</h6>
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
