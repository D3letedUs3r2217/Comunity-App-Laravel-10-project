@extends('layouts.signup-login')


@section('signup-login')
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
 <center>

     <h1>Login</h1>
     <form action="{{route('validate.route')}}" method="post">
        @csrf
        <label for="email">Email: </label><br>
        <input type="email" name="email" id="emailLogin"><br>
        <label for="password">Password: </label><br>
        <input type="password" name="password" id="passwordLogin"><br>
        <button type="submit">Login</button>
     </form>
     <h4>New here? <a href="{{route('register.route')}}">Signup now!</a></h3>
 </center>

</body>
</html>    


@endsection



