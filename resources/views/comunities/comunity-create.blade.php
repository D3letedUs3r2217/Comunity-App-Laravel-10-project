@extends('layouts.main')

@section('main')
    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Document</title>
    </head>
    <body>
        
        <section class="mainStyle">

            <form action="{{ route('createComunity') }}" method="post" id="create-comun">
            @csrf
            <label for="nome">Nome da Comunidade:</label>
            <input type="text" name="nome">
                <select name="type" id="comunity-type">
                    <option value="school">Escola</option>
                    <option value="work">Trabalho</option>
                    <option value="personal">Pessoal</option>
                    
                </select>
            <button type="submit">Criar Comunidade</button>
            
            
            </form>

        </section>

        
    </body>
    </html>
@endsection