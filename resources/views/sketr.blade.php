@extends('layouts.app')
@section('content')
<body class="sketr"> 
    <header>
        <img src="{{url('des/')}}/img/Picture6.png">
    </header>
    <div class="containerSketr">
        <div class="Sectionleft">
            <h3>ZONE - A</h3>
                <ul class="red">
                    <li><a href="#">VOLUME - I</a></li>
                    <li><a href="#">VOLUME -II</a></li>
                </ul>
            <h3>ZONE - B</h3>
                <ul class="yallow">
                    <li><a href="#">VOLUME - I</a></li>
                    <li><a href="#">VOLUME -II</a></li>
                </ul>            
            <h3>ZONE - C</h3>
                <ul class="blue">
                    <li><a href="#">VOLUME - I</a></li>
                    <li><a href="#">VOLUME -II</a></li>
                </ul>            
            <h3>ZONE - A , B & C</h3>
                <ul class="black">
                    <li><a href="#">VOLUME - I</a></li>
                    <li><a href="#">VOLUME -II</a></li>
                </ul>            
        </div>
        <div class="Sectionright">
            <img src="{{url('des/')}}/img/Picture1.jpg">
        </div>
    </div>
</body>
@endsection