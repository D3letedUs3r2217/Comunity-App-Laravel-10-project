
@extends('layouts.main')


@section('main')

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <title>Document</title>
</head>
<body id="body">
    <section class="mainStyle">
    
<aside>
    <ul id="profileCard">
        <li id="profile"><h3> {{ $profileName }} </h3></li>

    </ul>
        <button><a href="{{route('logout')}}">Logout</a></button>
</aside>

    
<main id="Comunity-Page">
    <h3>No Comunities...</h3>
    <h3>for now...</h3>
</main>



        <div class="addbtn">
    
            <button type="button" id="addbtn"><i class="fa-sharp fa-solid fa-plus"></i></i></button>
        </div>
        </section>
<div class="addCode-page" id="addCode-page">
    <form method="POST" action="{{route('codepost')}}" class="id-insert">
        @csrf
        <label for="ComunityId">Insert ID:</label>
        <input type="number" name="ComunityId" id="ComunityId" maxlength="4"><br>
        <button type="submit" id="insert-id">Enter Comunity</button>
        <button id="insert-id"><a href="{{ route('createC') }}">Create Comunity</a></button>
        
    </form>
</div>
</body>        

</html>

<script src="{{ asset('js/main.js') }}"></script>
@endsection
