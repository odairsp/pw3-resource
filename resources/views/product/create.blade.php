@extends('layouts.main')
@section('title', 'SHOW')

@section('main')

<div class="container text-center">
    <h1 class="m-5">Criar Produto</h1>
</div>

<div class="container d-flex justify-content-center">


    <div class="card m-2 text-center" style="width: 20rem;height: 26rem;">
        <div class="card-body w-100 h-100">

            <form class="h-100 w-100 d-flex flex-column " action="{{ route('products.store') }}" method="post">
                @csrf
                <h4 class="card-title mb-5">Novo Produto</h4>
                <div class="align-start">
                    <div class="form-floating mb-3">
                        <input required type="text" class="form-control" id="floatingInput"
                            placeholder="Nome do Produto" id="name" name="name">
                        <label for="floatingInput">Nome do Produto</label>
                    </div>
                    <div class="form-floating mb-5">
                        <textarea required class="form-control" placeholder="Descrição do produto" id="description"
                            name="description"></textarea>
                        <label for="floatingTextarea">Descrição do produto</label>
                    </div>

                </div>

                <button class="btn btn-primary" type="submit">Gravar</button>
            </form>
        </div>
    </div>

</div>

@endsection