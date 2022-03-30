@extends('layout')

@section('header')
    <div class="container mt-4 w-25">
        <div class="jumbotron bg-primary text-light">
            <h3 class="display-6">REGISTRE-SE</h3>
        </div>
    </div>
@endsection


@section('content')
    <div class="container w-25">
        @include('messages.errors',['errors' => $errors])
        <form method="post">
            @csrf
            <div class="form-group">
                <label for="name">Nome</label>
                <input type="text" name="name" id="name" required class="form-control">
            </div>

            <div class="form-group">
                <label for="email">E-mail</label>
                <input type="email" name="email" id="email" required class="form-control">
            </div>

            <div class="form-group">
                <label for="password">Senha</label>
                <input type="password" name="password" id="password" required min="1" class="form-control">
            </div>

            <button type="submit" class="btn btn-primary mt-3">
                Registrar-se
            </button>
        </form>
    </div>
@endsection
