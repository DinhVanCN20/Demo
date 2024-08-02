<!DOCTYPE html>
<html lang="en">
<head>
  <title>Nạp thẻ</title>
  <meta name="keywords" content="Thông Linh Sư">
  <meta name="description" content="Thông Linh Sư">
  <meta name="keywords" content="Mpire">
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <!-- <link rel="stylesheet" type="text/css" href="./assets/css/bootstrap.min.css"> -->
  <link rel="stylesheet" type="text/css" href="./assets/css/style.min.css">
  <link rel="stylesheet" type="text/css" href="./assets/css/tinyslide.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
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
        <li><a href="#"><img src='./assets/images/choingay.png'  class='tls-title--choingay cursor'></a></li>
        <li><a href="#"><img src='./assets/images/giftcode.png' class='tls-title--giftcode cursor'></a></li>
        <li><a href="./napthe.html"><img src='./assets/images/napthe.png' class='tls-title--napthe cursor'></a></li>
        <li><a href="#"><img src='./assets/images/congdong.png'  class='tls-title--congdong cursor'></a></li>
      </ul>
    </div>
    <div class='tls-detail d-flex'>
        <div class='container'>
            <div class='content-detail'>
                <h1>NẠP THẺ</h1>
                <p>
                    Xin chào: id user<br>
                    Xu của bạn: 0 <strong class='cursor'>Đổi xu</strong><br>
                    <span class='cursor'><a href="thongtin.html">Thông tin tài khoản</a></span> | <span class='cursor'><a href="quenmk.html">Đổi mật khẩu</a></span>
                </p>
                <div class='d-flex'>
                    <ul class='d-flex mx-auto'>
                        <li class='mr-2'><a><img src='./assets/images/napthe/doixu.png' class='cursor'></a></li>
                        <li><a><img src='./assets/images/napthe/napxu.png' class='cursor'></a></li>
                    </ul>
                </div>
                <div class='d-flex content-loaithe'>
                    <ul class='d-flex mx-auto'>
                        <li><a><img src='./assets/images/napthe/loaithe1.png' class='cursor'></a></li>
                        <li><a><img src='./assets/images/napthe/loaithe2.png' class='cursor'></a></li>
                        <li><a><img src='./assets/images/napthe/loaithe3.png' class='cursor'></a></li>
                        <li><a><img src='./assets/images/napthe/loaithe4.png' class='cursor'></a></li>
                        <li><a><img src='./assets/images/napthe/loaithe5.png' class='cursor'></a></li>
                        <li><a><img src='./assets/images/napthe/loaithe6.png' class='cursor'></a></li>
                    </ul>
                </div>
                <img src='./assets/images/napthe/dienthongtin.png' class="mt-4 mb-4 pl-4 pr-4">
                <div class='d-flex mx-auto thongtin-napthe row'>
                    <div class='col-7 form-group'>
                        <form>
                            <table class="table table-borderless">
                                <th width="50%"></th>
                                <tbody>
                                    <tr>
                                        <th>LOẠI NẠP</th>
                                        <td>
                                            <select class="form-control">
                                                <option>Nạp vàng vào game</option>
                                                <option>2</option>
                                                <option>3</option>
                                                <option>4</option>
                                            </select>
                                        </td>
                                    </tr>
                                    <tr>
                                        <th>CHỌN MÁY CHỦ</th>
                                        <td>
                                            <select class="form-control">
                                                <option>Chọn máy chủ để nạp xu</option>
                                                <option>2</option>
                                                <option>3</option>
                                                <option>4</option>
                                            </select>
                                        </td>
                                    </tr>
                                    <tr>
                                        <th>CHỌN KÊNH THẺ</th>
                                        <td>
                                            <select class="form-control">
                                                <option>Chọn kênh thẻ</option>
                                                <option>2</option>
                                                <option>3</option>
                                                <option>4</option>
                                            </select>
                                        </td>
                                    </tr>
                                    <tr>
                                        <th>NHẬP SỐ SERI</th>
                                        <td>
                                            <select class="form-control">
                                                <option>Seri thẻ</option>
                                                <option>2</option>
                                                <option>3</option>
                                                <option>4</option>
                                            </select>
                                        </td>
                                    </tr>
                                    <tr>
                                        <th>NHẬP MÃ THẺ</th>
                                        <td>
                                            <select class="form-control">
                                                <option>Mã thẻ</option>
                                                <option>2</option>
                                                <option>3</option>
                                                <option>4</option>
                                            </select>
                                        </td>
                                    </tr>
                                    <tr>
                                        <th>CHỌN MỆNH GIÁ</th>
                                        <td>
                                            <select class="form-control">
                                                <option>Chọn mệnh giá thẻ</option>
                                                <option>2</option>
                                                <option>3</option>
                                                <option>4</option>
                                            </select>
                                        </td>
                                    </tr>
                                    <tr>
                                        <tr colspan="2">
                                            <th><a><img src='./assets/images/napthe/napngay.png' class='cursor' style='margin-left: 180px;'></a></th>
                                        </tr>
                                    </tr>
                                </tbody>
                            </table>
                        </form>
                    </div>
                    <div class='col-5 border-left '>
                        <h5 class='mb-4 mt-4'><strong>Tỉ giá quy đổi thẻ</strong></h5>
                        <table class="table table-bordered">
                          <tbody>
                            <tr>
                              <td>Thẻ cào 20.000vnđ</td>
                              <td>= 200 vàng</td>
                            </tr>
                            <tr>
                              <td>Momo 10.000vnđ</td>
                              <td>= 110 vàng</td>
                            </tr>
                            <tr>
                              <td>Ngân hàng 10.000vnđ</td>
                              <td>= 110 vàng</td>
                            </tr>
                            <tr>
                              <td colspan="2">Chỉ chấp nhận thẻ viettel từ 50k trở lên</td>
                            </tr>
                            <tr>
                              <td colspan="2">Vina, Mobile chỉ chấp nhận từ 20k trở lên</td>
                            </tr>
                          </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
     <!-- begin: footer -->
     <footer class='row p-0 m-0 d-flex tls-footer'>
            <div class="block-info">z
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