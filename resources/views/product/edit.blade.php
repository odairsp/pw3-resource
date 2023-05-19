@extends('layouts.main')
@section('title', 'EDIT')

@section('main')

<div class="container text-center">
    <h1 class="m-5">Editar Produto</h1>
</div>

<div class="container d-flex justify-content-center">


    <div class="card m-2 text-center" style="width: 20rem;height: 26rem;">
        <div class="card-body w-100 h-100">

            <form class="h-100 w-100 d-flex flex-column text-start "
                action="{{ route('products.update', $product->id) }}" method="post">

                @csrf
                @method('PUT')
                <label for="category">Categoria</label>
                <h5 class="card-title border-botton border-primary">

                    <input class="h5 input" type="text" value="{{ $product->category }}" required name="category">
                </h5>
                <hr>
                <label for="name">Nome Produto</label>
                <h4 class="card-title">

                    <input class="h5 input" type="text" value="{{ $product->name }}" required name="name">
                </h4>

                <p class="card-text w-100 text-center">
                    <label for="description">Descrição Produto</label>
                    <textarea class="w-100 " type="text" required name="description">{{ $product->description
                        }}</textarea>
                </p>
                <button class="btn btn-primary" type="submit">Salvar</button>
            </form>
        </div>
    </div>

</div>

@endsection