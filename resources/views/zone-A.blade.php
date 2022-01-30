@extends('layouts.app')
@php
    $zone = App\Models\Zone::find(1);
@endphp
@section('content')
    <body class="containerZone">  
        <header>
            <div class="left">
                <img src="{{url('/des')}}/img/Picture7.png">
            </div>
            <div class="right">
                <img src="{{url('/des')}}/img/Picture8.jpg">
                <img src="{{url('/des')}}/img/zone.png">
                <img src="{{url('/des')}}/img/Untitled-1.png">
                <img src="{{url('/des')}}/img/Picture9.png">
                <div class="date">
                    <img src="{{url('/des')}}/img/Picture11.png">
                    <span>{{\Carbon\Carbon::parse(date(now()))->dayName;}}<br>{{\Carbon\Carbon::parse(date(now()))->toFormattedDateString();}}</span>
                </div>
                <div class="progress">
                    <img src="{{url('/des')}}/img/Picture1.png">
                    <span>{{$zone->progress}}%</span>
                </div>
            </div>
        </header>
        <div class="banner">
            <img src="{{url('/des')}}/img/Untitled-3.png">
        </div>
        <div class="containerSketr">
            @php
                $zoneA_Files = $zone->ZoneFiles()->whereNull('parent_id')->get()
            @endphp
            @foreach($zoneA_Files as $file)
            <div class="three" style="background-color: {{$file->color}} ;">
                @if($file->Childs()->count() != 0)
                    @foreach($file->Childs as $child)
                        <div class="circle"><a href="{{$child->file}}">{{$child->name}}</a></div>
                    @endforeach
                @endif
                <a href="{{$file->file}}" >
                    <h3>{{$file->name}}</h3>
                    <img src="{{url('/des')}}/img/{{$file->icon}}">
                </a>
            </div>
            @endforeach
        </div>
        <footer>
            <img src="{{url('/des')}}/img/Picture19.png">
        </footer>
    </body>
@endsection