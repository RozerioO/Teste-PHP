@extends('layout')

@section('header')

@endsection

@section('content')

    <div class="container mt-1 w-50">
        <div class="jumbotron bg-primary text-light text-center">
            <h5 class="display-6">POSTS:</h5>
        </div>

    @foreach($posts as $post)
        <div class="card mt-2" style="width: 40rem;">
            <div class="card-body">
                <h5 class="card-title">{{ $post -> title }}</h5>
                <h6 class="card-subtitle mb-2 text-muted">{{ $post -> subtitle }}</h6>
                <p class="card-text">Categoria: {{ $post -> category->name }}</p>
                <p class="card-text">{{ $post -> text }}</p>
                <p class="card-text">Criado por: {{ $post -> user -> name }}</p>
            </div>
        </div>
    @endforeach
    </div>
@endsection
