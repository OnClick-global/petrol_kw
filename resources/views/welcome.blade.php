@extends('layouts.app')
@section('content')
<body>  
    <div class="Page">
        <div class="right">
            <img class="kerp" src="{{url('des/')}}/img/kerp.png">
        </div>
        <div class="left">
            <img class="koc" src="{{url('des/')}}/img/KOC_Logo_for_wikipedia.png">
        </div>
        <div class="container middle">
            <div class="center">
                
            </div>
            <div class="container1">
                <a href="#" class="skter">
                    <span>SKETR</span>
                </a>
                <a href="#" class="nketr">
                    <span>NKETR</span>
                </a>
                <a href="{{url('sketr')}}" class="sketr2">
                    <span>SKETR II</span>
                </a>
            </div>
            <div class="container2">
                <a href="#" class="zone-1">
                    <span>ZONE 3</span>
                </a>
                <a href="#" class="zone-2">
                    <span>ZONE 2</span>
                </a>
                <a href="{{url('zone-A')}}" class="zone-A">
                    <span>ZONE A</span>
                </a>
                <a href="#" class="zone-B">
                    <span>ZONE B</span>
                </a>
            </div>
        </div>
    </div>
</body>
@endsection