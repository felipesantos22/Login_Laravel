<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <link rel="stylesheet" href="{{ asset('css/login.css') }}" />
    <title>Document</title>
</head>

<body>
    <div class="login-container">
        {{-- Pode ser usado se nos input não conter required --}}
        {{-- @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
        @endif --}}
        <h2>Login</h2>
        <form action="{{route('auth')}}" method="post">
            @csrf
            <input type="text" name="email" placeholder="Email" required />
            <br />
            <input type="password" name="password" placeholder="Senha" required />
            <br />
            <input type="submit" value="Login" />
        </form>
    </div>
</body>

</html>