@extends('layouts.main')
@section('title', 'INDEX')

@section('main')
    <div class="container text-center">
        <h1 class="m-5">Produtos</h1>
    </div>

    <div class="container d-flex flex-wrap w-100 justify-content-center">

        @foreach ($products as $product)
            <div class="card m-2" style="width: 18rem;">
                <div class="card-body">
                    <h4 class="card-title">{{ $product->name }}</h4>
                    <p class="card-text">{{ $product->description }}</p>
                </div>
            </div>
        @endforeach
    </div>


@endsection
