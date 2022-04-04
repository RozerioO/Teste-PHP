@extends('layout')

@section('header')
    <div class="container mt-1 w-25">
        <div class="jumbotron bg-primary text-light text-center">
            <h5 class="display-6">CRIAR NOVO POST</h5>
        </div>
    </div>
@endsection

@section('content')
    <div class="container mt-2 w-25">
        @include('messages.errors',['errors' => $errors])
        <form method="post" action="/posts/create">
            @csrf
            <div class="form-group">
                <label for="title">Titulo</label>
                <input type="text" class="form-control" name="title" id="title">
            </div>

            <div class="form-group">
                <label for="subtitle">Subtitulo</label>
                <input type="text" class="form-control" name="subtitle" id="subtitle">
            </div>
            <div class="form-floating">
                <label for="floatingSelect">Selecione uma categoria para o POST: </label>
                <select class="form-select mb-2" name="category_id" id="category_id" aria-label="Floating label select example">
                    @foreach($categories as $category)
                        <option value="{{$category->id}}">{{$category->name}}</option>
                    @endforeach
                </select>
            </div>
            <div class="form-group">
                <label for="text"></label>
                <textarea class="form-control" name="text" id="text" rows="3"placeholder="Digite o Post"></textarea>
            </div>
            <button class="btn btn-primary"> Criar</button>
        </form>
    </div>
@endsection
