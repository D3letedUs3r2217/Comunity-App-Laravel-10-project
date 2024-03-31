@extends('layouts.main')

@section('main')

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

            

        </section>
            <script src="{{asset('js/chat-comunity.js')}}"></script>

@endsection
