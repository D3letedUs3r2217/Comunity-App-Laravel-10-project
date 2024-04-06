@extends('layouts.main')

@section('main')
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />

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
                <li><a href="">Chat</a></li>
                <li><a href="{{ route('comunity-dashboard', [
                    'code' => $code
                ]) }}">Dashboard</a></li>
                <li><a href="">Posts</a></li>
                <li><a href="">page</a></li>

            </ul>
        </nav>
    <div class="content">
        
        <div id="response">

        </div>

        <form method="POST" action="{{route('post.message', ['code'=> $code])}}" class="chat-input">
            @csrf
            <textarea name="message" id="message" cols="50" rows="1"></textarea>
            <button type="submit" id="sendbtn">send</button>
        </form>
    </div>
    
    
    </main>

    <div id="shareIcon" class="shareIcon">
        <button id="sharecodebtn"><i class="fa-solid fa-share"></i></button>
    </div>
    </section>

    <div id="codeShare" class="shareCode">
        <h2>Code: {{$code}}</h2>
    </div>

        </section>
            <script src="{{asset('js/chat-comunity.js')}}"></script>
            <script src="{{asset('js/comunityMain.js')}}"></script>
@endsection
