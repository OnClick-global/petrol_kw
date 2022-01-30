@extends('layouts.app')
@section('content')
    <body class="containerZone">  
        <header>
            <div class="left">
                <img src="{{url('/des')}}/img/Picture7.png">
            </div>
            <div class="right">
                <img src="{{url('/des')}}/img/Picture8.jpg">
                <img src="{{url('/des')}}/img/Picture14.png">
                <img src="{{url('/des')}}/img/Picture12.jpg">
                <img src="{{url('/des')}}/img/Picture9.png">
                <img src="{{url('/des')}}/img/Picture11.png">
                <img src="{{url('/des')}}/img/Picture10.jpg">    
            </div>
        </header>
        <div class="banner">
            <img src="{{url('/des')}}/img/00.jpg">
        </div>
        <div class="containerSketr">
            @php
                $zoneA_Files = App\Models\Zone::find(1)->ZoneFiles()->whereNull('parent_id')->get()
            @endphp
            @foreach($zoneA_Files as $file)
            <a href="#" class="three" style="background-color: {{$file->color}} ;">
                <h3>{{$file->name}}</h3>
                <img src="{{url('/des')}}/img/Picture16.png">
            </a>
            @endforeach
        </div>
        <footer>
            <img src="{{url('/des')}}/img/Picture19.png">
        </footer>
    </body>
@endsection