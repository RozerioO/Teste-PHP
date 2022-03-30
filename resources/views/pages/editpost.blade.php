@extends('layout')

@section('header')
    <div class="container mt-2 w-50">
        <div class="jumbotron bg-primary text-light text-center">
            <h5 class="display-6">EDITAR O SEGUINTE POST:</h5>
        </div>
@endsection

@section('content')

            <div class="container mt-2 w-75">
                <form method="post" action="/posts/{{$post->id}}/save">
                    @csrf
                    <div class="form-group">
                        <label for="title">Digite o novo Titulo</label>
                        <input type="text" class="form-control" name="title" id="title" placeholder="{{$post->title}}">
                    </div>

                    <div class="form-group">
                        <label for="subtitle">Digite o novo Subtitulo</label>
                        <input type="text" class="form-control" name="subtitle" id="subtitle"  placeholder="{{$post->subtitle}}">
                    </div>
                    <div class="form-floating">
                        <label for="floatingSelect">Selecione uma nova categoria para o POST: </label>
                        <select class="form-select mb-2" name="category_id" id="category_id" aria-label="Floating label select example">
                            @foreach($categories as $category)
                                <option value="{{$category->id}}">{{$category->name}}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="text"></label>
                        <textarea class="form-control" name="text" id="text" rows="3"placeholder="{{$post->text}}"></textarea>
                    </div>
                    <button class="btn btn-primary"> Criar</button>
                </form>
            </div>
@endsection
