@extends('layouts.main')

@section('main')
    <!DOCTYPE html>
    <html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Document</title>
    </head>
    <body>
        <section class="schoolStyle">
            <div class="schoolTy">
                <h1> {{ $ComunityName}}</h1>

            </div>
            <main class="schoolContent">
                <nav class="schoolNav">
                    <ul>
                        <li><a href="{{route('comunity-template',[
                            'code'=> $code
                        ])}}">Home</a></li>
                        <li><a href="{{route('comunity-chat', [
                            'code' => $code
                        ])}}">Chat</a></li>
                        <li><a href="">Dashboard</a></li>
                        <li><a href="">Posts</a></li>
                        <li><a href="">page</a></li>
        
                    </ul>
                </nav>
            <div class="content">
                <h2>Dashboard</h2>
            </div>
            
            
            </main>
        </section>
    </body>
    </html>
@endsection