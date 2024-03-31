
@extends('layouts.signup-login')


@section('signup-login')
<center>
    <h1>Register</h1>
    <br>
        <form action="{{ route('save.student') }}" method="post">
            @csrf
            <input type="text" name="name"><br>
            <input type="email" name="email"><br>
            <input type="password" name="password"><br>
            <label for="genero">Gênero:</label>
    <select id="genero" name="gender">
        <option value="Homem">Homem</option>
        <option value="Mulher">Mulher</option>
    </select>
    <br>
            <button type="submit">Signup</button>
        </form>
    
</center>

@endsection