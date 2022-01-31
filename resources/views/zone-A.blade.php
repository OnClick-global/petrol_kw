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
                <img src="{{url('/des')}}/img/ccc.png">
                <img src="{{url('/des')}}/img/Picture9.png">
                <div class="date">
                    <img src="{{url('/des')}}/img/Picture11.png">
                    <span>{{\Carbon\Carbon::parse(date(now()))->dayName;}}<br>{{\Carbon\Carbon::parse(date(now()))->toFormattedDateString();}}</span>
                </div>
                <div class="progres">
                    <img src="{{url('/des')}}/img/Picture1.png">
                    <span>{{$zone->progress}}%</span>
                </div>
            </div>
        </header>
        <div class="banner">
            <img src="{{url('/des')}}/img/Untitled-3.png">
        </div>
        <div class="containerSketr">
            <div class="container">
                <div class="row">
                    @php
                        $zoneA_Files = $zone->ZoneFiles()->whereNull('parent_id')->get()
                    @endphp
                    @foreach($zoneA_Files as $file)
                    <div class="col-md-3">                        
                    <div class="three" style="background-color: {{$file->color}} ;">
                        <div class="dropdown">
                            <img src="{{url('/des')}}/img/{{$file->icon}}">
                          <a class="dropdown-toggle" id="dropdownMenuButton2" data-bs-toggle="dropdown" aria-expanded="false">
                            {{$file->name}}
                          </a>
                          <ul class="dropdown-menu dropdown-menu-dark" aria-labelledby="dropdownMenuButton2">
                            @if($file->Childs()->count() == 0)
                                <li><a href="{{$file->file}}" class="dropdown-item">{{$file->name}}</a></li>
                                <li><hr class="dropdown-divider"></li>
                            @else
                                @foreach($file->Childs as $child)
                                    <li><a class="dropdown-item" href="{{$child->file}}">{{$child->name}}</a></li>
                                @endforeach
                            @endif
                          </ul>
                        </div>  
                    </div>
                    </div>
                    @endforeach        
                </div>
            </div>
        </div>
        <footer>
            <img src="{{url('/des')}}/img/Picture19.png">
        </footer>
    </body>
@endsection