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

                <div class="d-flex flex-row justify-content-center pb-2">
                    <a href="{{ route('products.index') }}" class="btn btn-sm btn-success">Voltar</a>
                    <form action="{{ route('products.edit', $product->id) }}" method="GET">
                        @csrf
                        <button class="btn btn-sm btn-warning ms-2" type="submit">Editar</button>

                    </form>

                    <form action="{{ route('products.destroy', $product->id) }}" method="POST">
                        @method('delete')
                        @csrf

                        <button class="btn btn-sm btn-danger ms-2"
                            onclick="if(confirm('Deseja realmente excluir?')){if(confirm('Tem certeza?')){}else{return false;}}else{return false;}"
                            type="submit">Excluir</button>

                    </form>
                </div>
            </div>
        </div>

    </div>

@endsection
