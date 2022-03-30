@extends('layout')

@section('header')
@endsection

@section('content')
    <div class="container mt-1 w-25">
        <div class="jumbotron bg-primary text-light text-center">
            <h5 class="display-6">CATEGORIAS</h5>
        </div>
        <p>
            @include('messages.errors',['errors' => $errors])
            <button class="btn btn-primary btn-sm" type="button" data-bs-toggle="collapse" data-bs-target="#collapseExample" aria-expanded="false" aria-controls="collapseExample">
                Nova Categoria
            </button>
        </p>
        <div class="collapse" id="collapseExample">
            <div class="card card-body">
                <div class="mb-2">
                    <form method="post" action="category/create">
                        @csrf
                        <div class="form-group">
                            <label for="name">Categoria:</label>
                            <input type="text" class="form-control" name="name" id="name">
                            <button type="submit" class="btn btn-primary btn-sm mt-1">Adicionar</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        @foreach($categories as $category)
        <div class="card mt-2" style="width: 20rem;">
            <ul class="list-group list-group-flush">
                <li class="list-group-item">{{$category->name}}
                    <div class="d-flex justify-content-between">
                        <form method="post" action="/category/{{$category->id}}/edit">
                            @csrf
                            <input type="hidden" name="id" value="{{$category->id}}"/>
                            <button class="btn btn-primary btn-sm">Editar</button>
                        </form>
                        <form method="post" action="/category/delete">
                            @csrf
                            <input type="hidden" name="id" value="{{$category->id}}"/>
                            <input type="hidden" id="_method" value="delete"/>
                            <button type="submit" class="btn btn-danger btn-sm">Excluir</button>
                        </form>
                    </div>
                </li>
            </ul>
        </div>
        @endforeach
    </div>
@endsection
