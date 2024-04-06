
@extends('layouts.signup-login')


@section('signup-login')
<center>
    <h1>Register</h1>
    <br>
        <form action="{{ route('save.user') }}" method="post">
            @csrf
            <label for="name">Name: </label><br>
            <input type="text" name="name"><br>
            <label for="email">Email: </label><br>
            <input type="email" name="email"><br>
            <label for="password">Password</label><br>
            <input type="password" name="password"><br>
            <label for="genero">Gender:</label>
    <select id="genero" name="gender">
        <option value="Homem">Male</option>
        <option value="Mulher">Female</option>
    </select>
    <br>
            <button type="submit">Signup</button>
        </form>
    
        <h4>Already here? <a href="{{route('login.route')}}">Login!</a></h3>
</center>

@endsection