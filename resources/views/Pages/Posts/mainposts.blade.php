@extends('layout')

@section('header')
    <div class="container mt-2 w-50">
        <div class="jumbotron bg-primary text-light text-center">
            <h5 class="display-6">EDITAR POSTS:</h5>
        </div>
        <a href="/posts/newpost" class="btn btn-primary">Criar novo Post</a>
@endsection

@section('content')

    @foreach($posts as $post)
        <div class="card mt-2" style="width: 40rem;">
            <div class="card-body">
                <h5 class="card-title">{{ $post -> title }}</h5>
                <h6 class="card-subtitle mb-2 text-muted">{{ $post -> subtitle }}</h6>
                <p class="card-text">Categoria: {{ $post -> category->name }}</p>
                <p class="card-text">{{ $post -> text }}</p>
                <p class="card-text">Criado por: {{ $post -> user -> name }}</p>
                <div class="d-flex justify-content-between">
                        <a href="posts/{{$post->id}}/edit" class="btn btn-primary">Editar</a>
                    <form method="POST" action="/posts/delete">
                        @csrf
                        <input type="hidden" name="id" value="{{$post->id}}"/>
                        <input type="hidden" name="_method" value="delete" />
                        <button type="submit" class="btn btn-danger">Excluir</button>
                    </form>
                </div>
            </div>
        </div>
    @endforeach
</div>
@endsection
