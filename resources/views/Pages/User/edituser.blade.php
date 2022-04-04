@extends('layout')

@section('header')
    <div class="container mt-4 w-25">
        <div class="jumbotron bg-primary text-light text-center">
            <h3 class="display-6">Editar usuário</h3>
        </div>
    </div>
@endsection

@section('content')
        <form method="post" action="/user/{{$user->id}}/save">
            @csrf
            <div class="container mt-4 w-25">
                @include('messages.errors',['errors' => $errors])
                <div class="card mt-2 text-center" style="width: 19rem;">
                    <div class="card-body">
                        Digite o novo usuário:
                        <input class="form-control mt-2" type="text" id="name" name="name" placeholder="{{$user->name}}" value="{{$user->name}}">
                        Digite o novo e-mail:
                        <input class="form-control mt-2" type="text" id="email" name="email" placeholder="{{$user->email}}" value="{{$user->email}}">
                        Digite a nova senha:
                        <input class="form-control mt-2" type="password" id="password" name="password" placeholder="Minimo 8 Digitos">
                        <div class="d-flex justify-content-center">
                            <button type="submit" class="btn btn-primary mt-2">Salvar</button>
                        </div>
                    </div>
                </div>
            </div>
        </form>
@endsection
