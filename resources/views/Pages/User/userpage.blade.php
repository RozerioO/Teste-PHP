@extends('layout')

@section('header')
    <div class="container mt-4 w-25">
        <div class="jumbotron bg-primary text-light text-center">
            <h3 class="display-6">Usuários</h3>
        </div>
    </div>
@endsection

@section('content')
    @foreach($users as $user)
        <div class="container mt-4 w-25">
            <div class="card mt-2 text-center" style="width: 19rem;">
                <div class="card-body">
                    <h5 class="card-title">{{ $user->name }}</h5>
                    <h6 class="card-subtitle mb-2 text-muted">{{ $user->email }}</h6>
                    <div class="d-flex justify-content-between mt-4">
                            <a href="/user/{{$user->id}}/edit" class="btn btn-primary">Editar</a>
                        <form method="post" action="/user/delete">
                            @csrf
                            <input type="hidden" name="id" value="{{$user->id}}"/>
                            <input type="hidden" name="_method" value="delete"/>
                            <button type="submit" class="btn btn-danger">Excluir</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    @endforeach
@endsection
