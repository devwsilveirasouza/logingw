<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login</title>
    {{-- Bootstrap 5 --}}
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    {{-- CSS FormLogin --}}
    <link rel="stylesheet" href="{{asset('css/formLogin.css')}}">
</head>
<body>

    <form class="form-signin" method="post" action="{{ route('admin.login.do') }}">
        @csrf
        <img src="{{asset('img/logo.png')}}" alt="">

        @if ($errors->all())
            @foreach ($errors->all() as $error)
            <div class="alert alert-danger" role="alert">
                {{$error}}
              </div>
            @endforeach
        @endif
        {{-- <label for="email" class="sr-only">Endereço de email</label> --}}
        <input type="text" name="email" id="email" class="form-control" value="wsilveirasouza@gmail.com" placeholder="Seu email" required />

        {{-- <label for="password" class="sr-only">Senha</label> --}}
        <input type="password" name="password" id="password" class="form-control" value="12345678" placeholder="Senha" required />

        <button class="btn btn-lg btn-primary btn-block" type="submit">Login</button>
    </form>

    {{-- Scripts Js / jQuery 3.6.1 / Pooper / Bootsrtrap 5 --}}
    <script src="https://code.jquery.com/jquery-3.6.1.js" integrity="sha256-3zlB5s2uwoUzrXK3BT7AX3FyvojsraNFxCc2vC/7pNI=" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
</body>
</html>
