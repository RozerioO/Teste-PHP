@extends('layout')

@section('header')
    <div class="container mt-4 w-25">
        <div class="jumbotron bg-primary text-light text-center">
            <h3 class="display-6">Editar usuário</h3>
        </div>
    </div>
@endsection

@section('content')
    @foreach($users as $user)
        <form method="post" action="/user/{{$user->id}}/save">
            @csrf
            <div class="container mt-4 w-25">
                <div class="card mt-2 text-center" style="width: 19rem;">
                    <div class="card-body">
                        Digite o novo usuário:
                        <input class="form-control mt-2" type="text" id="name" name="name" placeholder="Usuário" aria-label="default input example">
                        Digite o novo e-mail:
                        <input class="form-control mt-2" type="text" id="email" name="email" placeholder="E-mail" aria-label="default input example">
                        Digite a nova senha:
                        <input class="form-control mt-2" type="password" id="password" name="password" placeholder="Minimo 8 Digitos" aria-label="default input example">
                        <div class="d-flex justify-content-center">
                            <button type="submit" class="btn btn-primary mt-2">Editar</button>
                        </div>
                    </div>
                </div>
            </div>
        </form>
    @endforeach
@endsection
