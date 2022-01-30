<ul class="menu-nav">
    <li class="menu-item @if(request()->segment(1) == 'dashboard') menu-item-active  @endif" aria-haspopup="true">
        <a href="{{url('/dashboard')}}" class="menu-link">
            <i class="menu-icon flaticon-home"></i>
            <span class="menu-text">الصفحة الرئيسية</span>
        </a>
    </li>

    <li class="menu-item @if(request()->segment(1) == 'zones' && request()->segment(2) == '1') menu-item-active  @endif" aria-haspopup="true">
        <a href="{{url('/zones/1')}}" class="menu-link">
            <i class="menu-icon flaticon-security"></i>
            <span class="menu-text">Zone A</span>
        </a>
    </li>
    <li class="menu-item @if(request()->segment(1) == 'sketrs' && request()->segment(2) == '1') menu-item-active  @endif" aria-haspopup="true">
        <a href="{{url('/sketrs/1')}}" class="menu-link">
            <i class="menu-icon flaticon-statistics"></i>
            <span class="menu-text">SKETR II</span>
        </a>
    </li>

</ul>
