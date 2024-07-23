<!DOCTYPE html>
<html lang="en">
<head>
  <title>Thông tin tài khoản</title>
  <meta name="keywords" content="Thông Linh Sư">
  <meta name="description" content="Thông Linh Sư">
  <meta name="keywords" content="Mpire">
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <!-- <link rel="stylesheet" type="text/css" href="./assets/css/bootstrap.min.css"> -->
  <link rel="stylesheet" type="text/css" href="./assets/css/style.min.css">
  <link rel="stylesheet" type="text/css" href="./assets/css/tinyslide.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
  <!-- FontAwesome -->
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css" integrity="sha384-oS3vJWv+0UjzBfQzYUhtDYW+Pj2yciDJxpsK1OYPAYjqT085Qq/1cq5FLXAZQ7Ay" crossorigin="anonymous">
</head>
<body>
    <!-- begin: right -->
    <div class='tls-right'>
        <div class='tls-right--bg'>
            <a class='btn-choi-game'><img src='./assets/images/right/btn-choi-game.png'></a>
            
                    <ul>
                        <li><a href='./index.html'><img src='./assets/images/right/trangchu.jpg' class='tls-right--trangchu'></a></li>
                        <li><a href='#'><img src='./assets/images/right/fanpage.jpg' class='tls-right--fanpage'></a></li>
                        <li><a href='#'><img src='./assets/images/right/congdong.jpg' class='tls-right--congdong'></a></li>
                        <li><a href='#'><img src='./assets/images/right/giftcode.jpg' class='tls-right--giftcode'></a></li>
                    </ul>    
        </div>
    </div>
      <!-- end: right -->
    <header class='tls-menu--top'>
        <div class="mainMenu d-flex">
            <ul class="menu float-right">
                <li><a href="{{url('/')}}">Trang chủ &nbsp;&nbsp;|</a></li>
                <li><a href="{{url('napthe')}}">Nạp thẻ &nbsp;&nbsp;|</a></li>
                <li><a href="{{url('sukien')}}">Sự kiện &nbsp;&nbsp;|</a></li>
                <li><a href="{{url('tintuc')}}">Tin Tức &nbsp;&nbsp;|</a></li>
                <li><a href="{{url('dangnhap')}}">Đăng nhập</a></li>
            </ul>
          <div class="logo float-left"><a href="index.html"><img src="./assets/images/LOGOs.png" alt=""></a></div>
        </div>
    </header>
    <div class='tls-title'>
      <img src='./assets/images/slogan.png'>
        <ul>
            <li><a href='#'></a><img src='./assets/images/choingay.png'  class='tls-title--choingay cursor'></a></li>
            <li><a href='#'></a><img src='./assets/images/giftcode.png' class='tls-title--giftcode cursor'></a></li>
            <li><a href='./napthe.html'><img src='./assets/images/napthe.png' class='tls-title--napthe cursor'></a></li>
            <li><a href='#'><img src='./assets/images/congdong.png'  class='tls-title--congdong cursor'></a></li>
          </ul>
    </div>
    <div class='tls-detail d-flex tls-thongtin'>
        <div class='container'>
            <div class='content-detail'>
                
                    <h1><span><img src='./assets/images/icon-sukien.png'></span>Đăng nhập</h1>
               
                <div class='mt-4 pt-4'>
                    <div class="nav flex-column nav-pills col-5 float-left" id="v-pills-tab" role="tablist" aria-orientation="vertical">
                        <a class="nav-link d-flex" id="v-pills-profile-tab" data-toggle="pill" href="#profile-update" role="tab" aria-selected="false">
                                <div class="img float-left"><i class="fas fa-user-friends"></i></div>
                                <div class="content">
                                    <h5>Đăng nhập vào tài khoản</h5>
                                    <p>Đăng nhập vào tài khoản để chơi thôi</p>
                                </div>
                        </a>
                    </div>
                    <div class="tab-content col-7 float-right" id="v-pills-tabContent">
                        <div class="tab-pane fade" id="profile-update" role="tabpanel" >
                            <form action="{{route('dangnhap-user')}}" method="POST">
                                @csrf
                                <h3>THÔNG TIN TÀI KHOẢN</h3>
                                @if(Session::has('success'))
                                    <div class="alert alert-success">{{Session::get('success')}}</div>
                                @endif
                                @if(Session::has('fail'))
                                    <div class="alert alert-danger">{{Session::get('fail')}}</div>
                                @endif
                                <table class="table table-borderless">
                                        <th width="50%"> 
                                            <tbody>
                                                <tr>
                                                    <th>Tên đăng nhập</th>
                                                    <td>
                                                        <input placeholder="Nhập tên đăng nhập" value="{{old('username')}}" name="username">
                                                        @error('username')
                                                            <div class="text-danger">{{$message}}</div>
                                                        @enderror
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <th>Mật khẩu</th>
                                                    <td>
                                                        <input placeholder="Nhập mật khẩu" type="password" name="password" >
                                                        @error('password')
                                                            <div class="text-danger">{{$message}}</div>
                                                        @enderror
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <th>Sđt đăng nhập</th>
                                                    <td>
                                                        <input placeholder="Nhập số điện thoại" name="phonenumber" value="{{old('phonenumber')}}">
                                                        @error('phonenumber')
                                                            <div class="text-danger">{{$message}}</div>
                                                        @enderror
                                                    </td>
                                                </tr>
                                            </tbody>
                                        </th>
                                </table>
                                <input class="btn btn-success" style="float: right;" type="submit" value="Đăng nhập">
                                <a href="{{url('/dangky')}}">Đăng ký</a>
                            </form>
                        </div>
                        
                        <div class="tab-pane fade" id="mk1" role="tabpanel" >
                            <form>
                                <h3>ĐỔI MẬT KHẨU CẤP 1</h3>
                                <table class="table table-borderless">
                                    <th width="50%"></th>
                                     <tbody>
                                        <tr>
                                           
                                            <td>
                                                <div class="inputWithIcon">
                                                    <input type="text" placeholder="Nhập mật khẩu hiện tại">
                                                    <i class="fas fa-lock fa-lg fa-fw" aria-hidden="true"></i>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            
                                            <td>
                                                <div class="inputWithIcon">
                                                    <input type="text" placeholder="Nhập mật khẩu mới">
                                                    <i class="fas fa-lock fa-lg fa-fw" aria-hidden="true"></i>
                                                    <br>
                                                    <sub style=" color: #3a99c0;">*(Ít nhất chứa 6 ký tự - khuyếnnghị nên tranh những mật khẩu dễ đoán)</sub>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                           
                                            <td>
                                                <div class="inputWithIcon">
                                                    <input type="text" placeholder="Nhập lại mật khẩu mới">
                                                    <i class="fas fa-lock fa-lg fa-fw" aria-hidden="true"></i>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                        <tr colspan="2">
                                            <th><a><img src='./assets/images/capnhat.png' class='cursor' style='margin-left: 180px;'></a></th>
                                        </tr>
                                                        
                                    </tbody>
                                </table>
                            </form>
                        </div>
                        <div class="tab-pane fade" id="mk2" role="tabpanel" >
                                <form>
                                        <h3>ĐỔI MẬT KHẨU CẤP 2</h3>
                                        <table class="table table-borderless">
                                            <th width="50%"></th>
                                             <tbody>
                                                <tr>
                                                   
                                                    <td>
                                                        <div class="inputWithIcon">
                                                            <input type="text" placeholder="Nhập mật khẩu hiện tại">
                                                            <i class="fas fa-lock fa-lg fa-fw" aria-hidden="true"></i>
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    
                                                    <td>
                                                        <div class="inputWithIcon">
                                                            <input type="text" placeholder="Nhập mật khẩu mới">
                                                            <i class="fas fa-lock fa-lg fa-fw" aria-hidden="true"></i>
                                                            <br>
                                                            <sub style=" color: #3a99c0;">*(Ít nhất chứa 6 ký tự - khuyếnnghị nên tranh những mật khẩu dễ đoán)</sub>
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr>
                                                   
                                                    <td>
                                                        <div class="inputWithIcon">
                                                            <input type="text" placeholder="Nhập lại mật khẩu mới">
                                                            <i class="fas fa-lock fa-lg fa-fw" aria-hidden="true"></i>
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr>
                                                <tr colspan="2">
                                                    <th><a><img src='./assets/images/capnhat.png' class='cursor' style='margin-left: 180px;'></a></th>
                                                </tr>
                                                                
                                            </tbody>
                                        </table>
                                    </form>
                        </div>
                        <div class="tab-pane fade" id="quenmk2" role="tabpanel">
                            <p><strong>Liên hệ admin qua fb: </strong>
                                <span class='cursor'>https://www.facebook.com/thonglinhsu.H5/</span></p>
                        </div>
                    </div>
                </div>
            </div>
            
        </div>

    </div>
                <!-- begin: footer -->
                <footer class='row p-0 m-0 d-flex tls-footer'>
          
                        <div class="block-info">
                           
                          THÔNG LINH SƯ H5<br>
                          ©2019 Bản quyền trò chơi thuộc về MangaPlay<br>
                          MangaPlay chính thức phát hành tại Việt Nam<br>
                          Địa chỉ : Tòa nhà LTA , 15 Đống Đa, Phường 2, Tân Bình, Hồ Chí Minh
                        </div><img src='./assets/images/logobottom.png'>
                      </footer>
                      <!-- end: footer -->
</body>
<script type="text/javascript" src="./assets/js/main.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
<script src="https://code.jquery.com/jquery-1.11.2.min.js" /></script>
<script>
    
    event();
</script>
</html>