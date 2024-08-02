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
    @if(Auth::check())
        @include('tintuc.IncludeNews.LoginHeader')
    @else()
        @include('tintuc.IncludeNews.header')
    @endif
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
                
                    <h1><span><img src='./assets/images/icon-sukien.png'></span>THÔNG TIN TÀI KHOẢN</h1>
               
                <div class='mt-4 pt-4'>
                    <div class="nav flex-column nav-pills col-5 float-left" id="v-pills-tab" role="tablist" aria-orientation="vertical">
                        <a class="nav-link active d-flex" id="v-pills-home-tab" data-toggle="pill" href="#info" role="tab"  aria-selected="true">
                            <div class="img float-left"><i class="fas fa-user"></i></div>
                            <div class="content">
                                <h5>Thông tin tài khoản</h5>
                                <p>Quản lý thông tin dùng để đăng nhập</p>
                            </div>
                        </a>
                        <a class="nav-link d-flex" id="v-pills-profile-tab" data-toggle="pill" href="#profile-update" role="tab" aria-selected="false">
                                <div class="img float-left"><i class="fas fa-user-friends"></i></div>
                                <div class="content">
                                    <h5>Cập nhật thông tin</h5>
                                    <p>Xem và cập nhật thông tin cá nhân</p>
                                </div>
                        </a>
                        <a class="nav-link d-flex" id="v-pills-messages-tab" data-toggle="pill" href="#giaodich" role="tab"  aria-selected="false">
                                <div class="img float-left"><i class="fas fa-history"></i></div>
                                <div class="content">
                                    <h5>Lịch sử giao dịch</h5>
                                    <p>Xem lịch sử nạp tiền vào game</p>
                                </div>
                        </a>
                        <a class="nav-link d-flex" id="v-pills-settings-tab" data-toggle="pill" href="#mk1" role="tab"  aria-selected="false">
                                <div class="img float-left"><i class="fas fa-lock"></i></div>
                                <div class="content">
                                    <h5>Đổi mật khẩu cấp 1</h5>
                                </div>
                        </a>
                        <a class="nav-link d-flex" id="v-pills-messages-tab" data-toggle="pill" href="#mk2" role="tab"  aria-selected="false">
                                <div class="img float-left"><i class="fas fa-unlock-alt"></i></div>
                                <div class="content">
                                    <h5>Đổi mật khẩu cấp 2</h5>
                                </div>
                        </a>
                        <a class="nav-link d-flex" id="v-pills-settings-tab" data-toggle="pill" href="#quenmk2" role="tab"  aria-selected="false">
                                <div class="img float-left"><i class="fas fa-unlock-alt"></i></div>
                                <div class="content">
                                    <h5>Quên mật khẩu cấp 2</h5>
                                </div>
                        </a>
                    </div>
                    <div class="tab-content col-7 float-right" id="v-pills-tabContent">
                        <div class="tab-pane fade show active" id="info" role="tabpanel">
                            <form>
                                <h3>THÔNG TIN TÀI KHOẢN</h3>
                                <table class="table table-borderless">
                                        <th width="50%"></th>
                                        <tbody>
                                            <tr>
                                                <th>Tên đăng nhập</th>
                                                <td>
                                                    <input placeholder=""readonly>
                                                </td>
                                            </tr>
                                            <tr>
                                                <th>Họ và Tên</th>
                                                <td><input placeholder=""readonly>
                                                </td>
                                            </tr>
                                            <tr>
                                                <th>Sđt đăng nhập</th>
                                                <td><input placeholder=""readonly></td>
                                            </tr>
                                            <tr>
                                                <th>Mật khẩu cấp 1</th>
                                                <td><input placeholder=""readonly></td>
                                            </tr>
                                            <tr>
                                                <th>Mật khẩu cấp 2</th>
                                                <td><input placeholder=""readonly></td>
                                            </tr>
                                            <tr>
                                                <th>Tình trạng</th>
                                                <td><input placeholder=""readonly></td>
                                            </tr>
                                        </tbody>
                                    </table>
                            </form>
                        </div>
                        <div class="tab-pane fade" id="profile-update" role="tabpanel" >
                            <form>
                                <h3>THÔNG TIN TÀI KHOẢN</h3>
                                <table class="table table-borderless">
                                        <th width="50%"></th>
                                         <tbody>
                                            <tr>
                                                <th>Tên đăng nhập</th>
                                                <td><input placeholder="Nhập tên đăng nhập"></td>
                                            </tr>
                                            <tr>
                                                <th>Họ và Tên</th>
                                                <td><input placeholder="Nhập họ tên">
                                                </td>
                                            </tr>
                                            <tr>
                                                <th>Sđt đăng nhập</th>
                                                <td><input placeholder="Nhập số điện thoại">
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
                        <div class="tab-pane fade" id="giaodich" role="tabpanel" >
                                <form style='width: 115%;'>
                                        <h3>LỊCH SỬ GIAO DỊCH</h3>
                                        <table class="table table-bordered table-striped ">
                                           <thead style="background: #3a99c0; color:#fff">
                                              <tr>
                                                 <th>User</th>
                                                 <th>Ngày/giờ</th>
                                                 <th>Nạp vào</th>
                                                 <th>Seri</th>
                                                 <th>Mệnh giá</th>
                                                 <th>Trạng thái</th>
                                              </tr>
                                           </thead>
                                           <tbody>
                                              <tr>
                                                 <td>Name</td>
                                                 <td>25/04</td>
                                                 <td>Game</td>
                                                 <td>123</td>
                                                 <td>10.000</td>
                                                 <td>Done</td>
                                              </tr>
                                              <tr>
                                                 <td>Name</td>
                                                 <td>25/04</td>
                                                 <td>Game</td>
                                                 <td>123</td>
                                                 <td>10.000</td>
                                                 <td>Done</td>
                                              </tr>
                                              <tr>
                                                 <td>Name</td>
                                                 <td>25/04</td>
                                                 <td>Game</td>
                                                 <td>123</td>
                                                 <td>10.000</td>
                                                 <td>Done</td>
                                              </tr>
                                           </tbody>
                                        </table>
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