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
                
                    <h1><span><img src='./assets/images/icon-sukien.png'></span>Đăng ký</h1>
                
                    <div class='mt-4 pt-4'>
                        <div class="nav flex-column nav-pills col-5 float-left" id="v-pills-tab" role="tablist" aria-orientation="vertical">
                            <a class="nav-link active d-flex" id="v-pills-home-tab" data-toggle="pill" href="#info" role="tab">
                                <div class="img float-left"><i class="fas fa-user"></i></div>
                                <div class="content">
                                    <h5>Đăng kí tài khoản</h5>
                                    <p>Tạo tài khoản mới để đăng nhập</p>
                                </div>
                            </a>
                            
                        </div>
                        <div class="tab-content col-7 float-right" id="v-pills-tabContent">
                            <div class="tab-pane fade show active" id="info" role="tabpanel">
                                <form action="" method="POST">
                                    @csrf
                                    <h3>THÔNG TIN TÀI KHOẢN</h3>
                                    <table class="table table-borderless" method="POST">
                                            <th width="50%"></th>
                                            <tbody>
                                                <tr>
                                                    <th>Tên đăng nhập</th>
                                                    <td>
                                                        <input type="text" name="username" value="{{old('username')}}">
                                                        @error('username')
                                                            <div class="text-danger">{{$message}}</div>
                                                        @enderror
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <th>Họ và Tên</th>
                                                    <td>
                                                        <input type="text" name="name" value="{{old('name')}}">
                                                        @error('name')
                                                            <div class="text-danger">{{$message}}</div>
                                                        @enderror
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <th>Sđt đăng nhập</th>
                                                    <td>
                                                        <input type="text" name="phonenumber" value="{{old('phonenumber')}}">
                                                        @error('phonenumber')
                                                            <div class="text-danger">{{$message}}</div>
                                                        @enderror
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <th>Mật khẩu cấp 1</th>
                                                    <td>
                                                        <input type="password" name="password" >
                                                        @error('password')
                                                            <div class="text-danger">{{$message}}</div>
                                                        @enderror
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <th>Mật khẩu cấp 2</th>
                                                    <td>
                                                        <input type="password" name="confirmpass" >
                                                        @error('confirmpass')
                                                            <div class="text-danger">{{$message}}</div>
                                                        @enderror
                                                    </td>
                                                </tr>
                                            </tbody>
                                        </table>
                                        <a href="{{url('/dangnhap')}}">Đăng nhập</a>
                                        <input class="btn btn-success" style="float: right;" type="submit" value="Đăng ký">
                                </form>
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