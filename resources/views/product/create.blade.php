@extends('layouts.main')
@section('title', 'SHOW')

@section('main')

    <div class="container text-center">
        <h1 class="m-5">Criar Produto</h1>
    </div>

    <div class="container d-flex justify-content-center">


        <div class="card m-2 text-center" style="width: 20rem;height: 26rem;">
            <div class="card-body w-100 h-100">
                @csrf
                <form class="h-100 w-100 d-flex flex-column " action={{ route('product.store') }} method="post">
                    @csrf
                    <h4 class="card-title">
                        <input class="h5" type="text" placeholder="Nome do Produto" required name="name">
                    </h4>
                    <p class="card-text w-100 text-center">
                        <textarea class="w-100 " type="text" placeholder="Descrição do produto" required name="description"></textarea>
                    </p>
                    <button class="btn btn-primary" type="submit">Gravar</button>
                </form>
            </div>
        </div>

    </div>

@endsection
