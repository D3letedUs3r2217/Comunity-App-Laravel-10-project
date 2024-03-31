@extends('layouts.main')


@section('main')
    <!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <title>Document</title>
</head>
<body>
    <section class="schoolStyle">

        <div class="schoolTy">
            <h1>Nome: {{ $ComunityName }}</h1>
        </div>

<main class="schoolContent">
    <nav class="schoolNav">
        <ul>            
            <li><a href="">Home</a></li>
            <li><a href="{{route('comunity-chat', [
                'code' => $code
            ])}}">Chat</a></li>
            <li><a href="{{ route('comunity-dashboard', [
                'code' => $code
            ]) }}">Dashboard</a></li>
            <li><a href="">Posts</a></li>
            <li><a href="">page</a></li>

        </ul>
    </nav>
<div class="content">

</div>


</main>


    
    </section>

    <script src="{{ asset('js/comunityMain.js') }}"></script>


</body>
</html>
@endsection


