@extends('layouts.main')
@section('title', 'INDEX')

@section('main')

@if (session('msg'))
<div class="bg-success text-center text-light fs-4 p-3 justify-itens-center ">
    <p>{{ session('msg') }}</p>
    <div class="text-start d-flex justify-content-center">
        <p class="fs-6">Produto - {{ session('product')->name }}<br> Descrição -
            {{ session('product')->description }}</p>
    </div>
</div>
@endif
@if (session('alert'))
<div class="bg-warning text-center text-dark fs-4 p-3 justify-itens-center ">
    <p>{{ session('alert') }}</p>
    <div class="text-start d-flex justify-content-center">
        <p class="fs-6">Produto - {{ session('product')->name }}<br> Descrição -
            {{ session('product')->description }}</p>
    </div>
</div>
@endif

<div class="container text-center">
    <h1 class="m-5">Produtos</h1>
    <a class="btn btn-success btn-sm mb-3" href="{{ route('products.create') }}">Criar novo produto</a>
</div>


<div class="container d-flex flex-wrap w-100 justify-content-center">
    @if (count($products) == 0)
    @else
    @foreach ($products as $product)
    <div class="card m-2" style="width: 18rem;">
        <div class="card-body">
            <h4 class="card-title">{{ $product->name }}</h4>
            <p class="card-text">{{ $product->description }}</p>
        </div>
        <div class="d-flex flex-row justify-content-center pb-2">

            <a href="{{route('products.show',$product->id)}}" class="btn btn-sm btn-success px-3">Ver</a>

            <form action="{{ route('products.edit', $product->id) }}" method="GET">
                @csrf
                <button class="btn btn-sm btn-warning ms-2" type="submit">Editar</button>

            </form>

            <form action="{{ route('products.destroy', $product->id) }}" method="POST">
                @method('delete')
                @csrf

                <button class="btn btn-sm btn-danger ms-2"
                    onclick="if(confirm('Deseja realmente excluir?')){if(confirm('Deseja realmente excluir?')){}else{return false;}}else{return false;}"
                    type="submit">Excluir</button>

            </form>

        </div>

    </div>
    @endforeach
    @endif

</div>


@endsection