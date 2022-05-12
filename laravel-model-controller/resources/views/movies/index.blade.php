@extends('layouts.base')

@section('title', 'Movies')

@section('main-content')
    <main>
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <h1>Collezione Cinema di {{$luke}}</h1>
                    @dump($Movies);
                </div>
            </div>
        </div>
    </main>
@endsection

