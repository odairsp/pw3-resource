@extends('layouts.main')
@section('title', 'SHOW')

@section('main')

    <div class="container text-center">
        <h1 class="m-5">Produto</h1>
    </div>

    <div class="container d-flex justify-content-center">


        <div class="card m-2 text-center" style="width: 20rem;height: 26rem;">
            <div class="card-body">
                <h4 class="card-title">{{ $product->name }}</h4>
                <p class="card-text text-center">{{ $product->description }}</p>
            </div>
        </div>

    </div>

@endsection