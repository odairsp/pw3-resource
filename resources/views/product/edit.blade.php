@extends('layouts.main')
@section('title', 'EDIT')

@section('main')

    <div class="container text-center">
        <h1 class="m-5">Editar Produto</h1>
    </div>

    <div class="container d-flex justify-content-center">


        <div class="card m-2 text-center" style="width: 20rem;height: 26rem;">
            <div class="card-body w-100 h-100">

                <form class="h-100 w-100 d-flex flex-column " action="{{ route('products.update', $product->id) }}"
                    method="post">

                    @csrf
                    @method('PUT')

                    <h4 class="card-title">
                        <input class="h5 input" type="text" value="{{ $product->name }}" required name="name">
                    </h4>

                    <p class="card-text w-100 text-center">
                        <textarea class="w-100 " type="text" required name="description">{{ $product->description }}</textarea>
                    </p>
                    <button class="btn btn-primary" type="submit">Salvar</button>
                </form>
            </div>
        </div>

    </div>

@endsection
