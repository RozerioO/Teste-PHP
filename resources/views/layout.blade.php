<!doctype html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Gerênciamento de Posts</title>
</head>
<body>
    <div class="container-fluid bg-primary">
        <div class="jumbotron-fluid bg-primary text-light">
            <h1 class="display-4">Gerênciamento de Posts
            </h1>
        </div>
    </div>
    @auth()
    <div class="container-fluid bg-primary">
                <ul class="nav nav-pills">
                    <li class="nav-item">
                        <a class="nav-link active" href="/home">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" href="/category">Categorias</a>
                    </li>
                        <li class="nav-item">
                            <a class="nav-link active" href="/posts">Posts</a>
                        </li>
                            <li class="nav-item">
                                <a class="nav-link active" href="/user">Usuários</a>
                            </li>
                        <li class="nav-item">
                            <a class="nav-link active" href="/logout">Sair</a>
                        </li>
                </ul>
    </div>
    @endauth
    @guest()

        <div class="container-fluid bg-primary">
            <ul class="nav nav-pills">
                <li class="nav-item">
                    <a class="nav-link active" href="/home">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link active" href="/register">Registre-se</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link active" href="/logout">Login</a>
                </li>
            </ul>
        </div>
    @endguest
    @yield('header')
    <div class="container mt-1 w-25">
    </div>
    @yield('content')

</body>
</html>
