<header class='tls-menu--top'>
    <div class="mainMenu d-flex">
        <ul class="menu float-right">
            <li><a href="{{url('/')}}">Trang chủ &nbsp;&nbsp;|</a></li>
            <li><a href="{{url('napthe')}}">Nạp thẻ &nbsp;&nbsp;|</a></li>
            <li><a href="{{url('sukien')}}">Sự kiện &nbsp;&nbsp;|</a></li>
            <li><a href="{{url('tintuc')}}">Tin Tức &nbsp;&nbsp;|</a></li>
            <li><a href="#">{{ Auth::user()->username }} &nbsp;&nbsp;|</a></li>
            <li><a href="{{url('logoutUser')}}">Đăng xuất</a></li>
        </ul>
        <div class="logo float-left"><a href="index.html"><img src="/assets/images/LOGOs.png" alt=""></a></div>
    </div>
</header>