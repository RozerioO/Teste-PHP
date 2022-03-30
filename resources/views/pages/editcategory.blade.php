@extends('layout')

@section('header')
    <div class="container mt-4 w-50">
        <div class="jumbotron bg-primary text-light text-center">
            <h3 class="display-6">Editar a Seguinte Categoria: </h3>
        </div>
    </div>
@endsection

@section('content')
    @foreach($categories as $category)
        <div class="container mt-4 w-50">
            Categoria Atual: {{$category->name}}
            <form method="post" action="/category/{{$category->id}}/save">
                @csrf
                <input class="form-control mt-2" type="text" id="name" name="name" placeholder="Digite a nova categoria" aria-label="default input example">
                <button type="submit" class="btn btn-primary mt-2">Salvar</button>
            </form>
        </div>

    @endforeach
@endsection
