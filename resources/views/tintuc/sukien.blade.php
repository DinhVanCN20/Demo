<!DOCTYPE html>
<html lang="en">
<head>
  <title>Su Kien</title>
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
<body class='container-fluid m-0 p-0'>

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
   
    <div class='tls-detail d-flex'>
      <div class='container'>
        <!-- begin: content body -->
            <div class='content-detail'>
                <h1><span><img src='./assets/images/icon-sukien.png'></span>SỰ KIỆN</h1>
            </div>
            <div class='content-tintuc scroll-box mt-4'>
              <ul>
                @if($posts)
                    @foreach($posts as $row)
                      <li class='box-tintuc'><a>
                        <img src='{{url ('uploads/'.$row->image)}}'>
                        <div class='float-right box-text'>
                            <p>
                                <strong>{{$row->title}}</strong>
                                <span>{{date("d/m/Y",strtotime($row->created_at))}}</span>  
                            </p>{{$row->description}}
                            <p></p>
                        </div>
                      </a></li>
                      @endforeach
                  @endif
                <li class='box-tintuc'><a>
                    <img src='./assets/images/ts_icon_02.png'>
                    <div class='float-right box-text'>
                        <p>
                            <strong>Tính năng: Băng Hải Tặc</strong>
                            <span>03/05/2019</span>
                        </p>
                        <p>Từng bừng khai mở Máy Chủ Thiên Nam S30 game Phàm Nhân Tu Tiên. Bài viết sẽ tổng hợp những sự kiện diễn ra sau khi mở server </p>
                    </div>
                </a></li>
                <li class='box-tintuc'><a>
                  <img src='./assets/images/ts_icon_03.png'>
                  <div class='float-right box-text'>
                      <p>
                          <strong>Tính năng: Băng Hải Tặc</strong>
                          <span>03/05/2019</span>
                      </p>
                      <p>Từng bừng khai mở Máy Chủ Thiên Nam S30 game Phàm Nhân Tu Tiên. Bài viết sẽ tổng hợp những sự kiện diễn ra sau khi mở server </p>
                  </div>
                  </a>
                </li>
                <li class='box-tintuc'><a>
                  <img src='./assets/images/ts_icon_07.png'>
                  <div class='float-right box-text'>
                      <p>
                          <strong>Tính năng: Băng Hải Tặc</strong>
                          <span>03/05/2019</span>
                      </p>
                      <p>Từng bừng khai mở Máy Chủ Thiên Nam S30 game Phàm Nhân Tu Tiên. Bài viết sẽ tổng hợp những sự kiện diễn ra sau khi mở server </p>
                  </div>
                  </a>
                </li>
                <li class='box-tintuc'><a>
                  <img src='./assets/images/ts_icon_02.png'>
                  <div class='float-right box-text'>
                      <p>
                          <strong>Tính năng: Băng Hải Tặc</strong>
                          <span>03/05/2019</span>
                      </p>
                      <p>Từng bừng khai mở Máy Chủ Thiên Nam S30 game Phàm Nhân Tu Tiên. Bài viết sẽ tổng hợp những sự kiện diễn ra sau khi mở server </p>
                  </div>
                  </a>
                </li>
                <li class='box-tintuc'><a>
                  <img src='./assets/images/ts_icon_03.png'>
                  <div class='float-right box-text'>
                      <p>
                          <strong>Tính năng: Băng Hải Tặc</strong>
                          <span>03/05/2019</span>
                      </p>
                      <p>Từng bừng khai mở Máy Chủ Thiên Nam S30 game Phàm Nhân Tu Tiên. Bài viết sẽ tổng hợp những sự kiện diễn ra sau khi mở server </p>
                  </div>
                  </a>
                </li>
                <li class='box-tintuc'><a>
                  <img src='./assets/images/ts_icon_07.png'>
                  <div class='float-right box-text'>
                      <p>
                          <strong>Tính năng: Băng Hải Tặc</strong>
                          <span>03/05/2019</span>
                      </p>
                      <p>Từng bừng khai mở Máy Chủ Thiên Nam S30 game Phàm Nhân Tu Tiên. Bài viết sẽ tổng hợp những sự kiện diễn ra sau khi mở server </p>
                  </div>
                </a></li>
                <li class='box-tintuc'><a>
                  <img src='./assets/images/ts_icon_02.png'>
                  <div class='float-right box-text'>
                      <p>
                          <strong>Tính năng: Băng Hải Tặc</strong>
                          <span>03/05/2019</span>
                      </p>
                      <p>Từng bừng khai mở Máy Chủ Thiên Nam S30 game Phàm Nhân Tu Tiên. Bài viết sẽ tổng hợp những sự kiện diễn ra sau khi mở server </p>
                  </div>
                </a></li>
                <li class='box-tintuc'><a>
                  <img src='./assets/images/ts_icon_03.png'>
                  <div class='float-right box-text'>
                      <p>
                          <strong>Tính năng: Băng Hải Tặc</strong>
                          <span>03/05/2019</span>
                      </p>
                      <p>Từng bừng khai mở Máy Chủ Thiên Nam S30 game Phàm Nhân Tu Tiên. Bài viết sẽ tổng hợp những sự kiện diễn ra sau khi mở server </p>
                  </div>
                </a></li>
                <li class='box-tintuc'><a>
                  <img src='./assets/images/ts_icon_07.png'>
                  <div class='float-right box-text'>
                      <p>
                          <strong>Tính năng: Băng Hải Tặc</strong>
                          <span>03/05/2019</span>
                      </p>
                      <p>Từng bừng khai mở Máy Chủ Thiên Nam S30 game Phàm Nhân Tu Tiên. Bài viết sẽ tổng hợp những sự kiện diễn ra sau khi mở server </p>
                  </div>
                </a></li>
                <li class='box-tintuc'><a>
                  <img src='./assets/images/ts_icon_02.png'>
                  <div class='float-right box-text'>
                      <p>
                          <strong>Tính năng: Băng Hải Tặc</strong>
                          <span>03/05/2019</span>
                      </p>
                      <p>Từng bừng khai mở Máy Chủ Thiên Nam S30 game Phàm Nhân Tu Tiên. Bài viết sẽ tổng hợp những sự kiện diễn ra sau khi mở server </p>
                  </div>
                </a></li>
                <li class='box-tintuc'><a>
                  <img src='./assets/images/ts_icon_03.png'>
                  <div class='float-right box-text'>
                      <p>
                          <strong>Tính năng: Băng Hải Tặc</strong>
                          <span>03/05/2019</span>
                      </p>
                      <p>Từng bừng khai mở Máy Chủ Thiên Nam S30 game Phàm Nhân Tu Tiên. Bài viết sẽ tổng hợp những sự kiện diễn ra sau khi mở server </p>
                  </div>
                </a></li>
                <li class='box-tintuc'><a>
                  <img src='./assets/images/ts_icon_07.png'>
                  <div class='float-right box-text'>
                      <p>
                          <strong>Tính năng: Băng Hải Tặc</strong>
                          <span>03/05/2019</span>
                      </p>
                      <p>Từng bừng khai mở Máy Chủ Thiên Nam S30 game Phàm Nhân Tu Tiên. Bài viết sẽ tổng hợp những sự kiện diễn ra sau khi mở server </p>
                  </div>
                </a></li>
              </ul>
          </div>
        <!-- end: content body -->
        
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
<!-- <script type="text/javascript" src="./assets/js/bootstrap.js"></script> -->
<!-- <script type="text/javascript" src="./assets/js/jquery.js"></script> -->
<script type="text/javascript" src="./assets/js/main.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
<script src="https://code.jquery.com/jquery-1.11.2.min.js" /></script>

<script>
    
    
    event();
</script>
</html>
