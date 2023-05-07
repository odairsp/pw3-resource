@extends('layouts.main')
@section('title', 'INDEX')

@section('main')

@if (session('msg'))
<div class="bg-success text-center text-light fs-4 p-3 justify-itens-center ">
    <p>{{ session('msg') }}</p>
    <div class="text-start d-flex justify-content-center">
        <p class="fs-6">Produto - {{session('product')->name}}<br> Descrição - {{session('product')->description}}</p>
    </div>
</div>

@endif

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
        <div class="d-flex flex-row justify-content-center pb-2">
            
            <form action={{route('products.edit',['product'=> ($product->id)])}} method="GET">

                @csrf
                <button class="btn btn-sm btn-warning" type="submit">{{$product->id}} - Editar</button>

            </form>
            <form action="">
                @csrf
                <a class="btn btn-sm btn-danger ms-2" href="">Excluir</a>
            </form>

        </div>

    </div>
    @endforeach
</div>


@endsection
