@extends('layouts.app')
@php
    $sketr = \App\Models\Sketer::find(1);
@endphp
@section('content')
<body class="sketr"> 
    <header>
        <img src="{{url('des/')}}/img/Picture6.png">
    </header>
    <div class="containerSketr">
        <div class="Sectionleft">
            <h3>ZONE - A</h3>
                <ul class="red">
                    <li><a href="{{\App\Models\Sketer_file::find(5)->file}}">VOLUME - I</a></li>
                    <li><a href="{{\App\Models\Sketer_file::find(6)->file}}">VOLUME -II</a></li>
                </ul>
            <h3>ZONE - B</h3>
                <ul class="yallow">
                    <li><a href="{{\App\Models\Sketer_file::find(7)->file}}">VOLUME - I</a></li>
                    <li><a href="{{\App\Models\Sketer_file::find(8)->file}}">VOLUME -II</a></li>
                </ul>            
            <h3>ZONE - C</h3>
                <ul class="blue">
                    <li><a href="{{\App\Models\Sketer_file::find(9)->file}}">VOLUME - I</a></li>
                    <li><a href="{{\App\Models\Sketer_file::find(10)->file}}">VOLUME -II</a></li>
                </ul>            
            <h3>ZONE - A , B & C</h3>
                <ul class="black">
                    <li><a href="{{\App\Models\Sketer_file::find(11)->file}}">VOLUME - I</a></li>
                    <li><a href="{{\App\Models\Sketer_file::find(12)->file}}">VOLUME -II</a></li>
                </ul>            
        </div>
        <div class="Sectionright">
            <img src="{{url('des/')}}/img/Picture1.jpg">
        </div>
    </div>
</body>
@endsection