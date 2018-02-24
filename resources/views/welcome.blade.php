@extends('layouts.app')

@section('content')
    <div class="jumbotrop text-center">
        <h1>Prowasi</h1>
        <nav>
            <ul class="nav nav-pills">
                <li class="nav=item">
                    <a class="nav-link" href="/">Home</a>
                </li>
                <li class="nav=item">
                    <a class="nav-link" href="/acerca">Acerca de nosotros!</a>
                </li>
            </ul>
        </nav>
    </div>
    <div class="row">
        <div class="col-6">
            <img class="img-thumbnail" src="{{ $msg['image'] }}">   
            <p class="card-text">
                {{ $msg['contents'] }}
                <a href="/id">Leer más</a>
            </p>
        </div>
    </div>
    
@endsection