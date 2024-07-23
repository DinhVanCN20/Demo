<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Danh sách tin tức</title>
  <link href="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  <link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.js"></script>
</head>
<body>

    <div id="wrapper">
        <div class="navbar  navbar-fix-top">
            <div class="adjust-nav">
                <span class="admin" style="font-size: 20px;">
                    <a href="">ADMIN</a>
                </span>
                
                <span class="logout" style="font-size: 20px; float:right">
                    <a href="">LOGOUT</a>
                </span> <br>
            </div>
        </div>
    </div>

    <h1>Danh sách bảng tin</h1>
    <a href="{{url('admin/post/add')}}">
        <button class="btn-sm btn btn-success">Thêm tin tức mới</button>
    </a>
    <table class="table table-striped table-hover">
        <thead>
            <tr><th>Tiêu đề</th><th>Hình ảnh</th><th>Miêu tả</th><th>Ngày đăng</th><th>Tuỳ chọn</th></tr>
        </thead>
        <tbody>
            @if($rows)
                @foreach($rows as $row)
                    <tr><td>{{$row->title}}</td><td><img src="{{url ('uploads/'.$row->image)}}" style='width:120px;'/></td><td>{{$row->description}}</td><td>{{date("d/m/Y",strtotime($row->created_at))}}</td>
                        <td>
                            <a href="{{url('admin/post/edit/'.$row->id)}}">
                                <button class="btn-sm btn btn-success">Sửa</button>
                            </a>
                            <a href="{{url('admin/post/delete/'.$row->id)}}">
                                <button class="btn-sm btn btn-warning">Xoá</button>
                            </a>
                            
                        </td>
                    </tr>
                @endforeach
            @endif
        </tbody>
    </table>
  <script>
    $(document).ready(function() {
        $('#summernote').summernote();
    });
  </script>
    <script src="./access/js/jquery-3.3.1.min.js"></script>
    <script src="./access/js/popper.min.js"></script>
    <script src="./access/js/bootstrap.min.js"></script>
    <script src="./access/js/main.js"></script>
</body>
</html>