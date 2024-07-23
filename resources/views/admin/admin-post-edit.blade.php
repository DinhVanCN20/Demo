<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Tạo tin tức mới</title>
  <link href="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  <link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.js"></script>
</head>
<body>

    <h1>Sửa tin tức</h1>
    <br>
  <div class="container-fluid col-lg-10 "> 
    <form method="POST" enctype="multipart/form-data" class="">
      @csrf
      {{--  @if($errors->any())
        {{ implode('', $errors->all('<div>:message</div>')) }}
      @endif  --}}
      <div class="form-group row">
        <label for="file" class="col-sm-1 col-form-lable">Tiêu đề</label>
        <div class="col-sm-11">
          <input type="text" class="form-control" value="{{$row->title}}" name="title" require>
          @error('title')
            <div class="text-danger">{{$message}}</div>
          @enderror
        </div>
      </div>
      
      <div class="form-group row">
        <label for="file" class="col-sm-1 col-form-lable">Ảnh mô tả</label>
        <div class="col-sm-11">
          <input type="file" class="form-control" name="file">
          <img src="{{url('uploads/'.$row->image)}}" style="width:150px;">
          @error('title')
            <div class="text-danger">{{$message}}</div>
          @enderror
        </div>
      </div> 
      
      <div class="form-group row">
        <label for="file" class="col-sm-1 col-form-lable">Mô tả</label>
        <div class="col-sm-11">
          <input type="text" class="form-control" value="{{$row->description}}" name="description">
          @error('title')
            <div class="text-danger">{{$message}}</div>
          @enderror
        </div>
      </div>
      
      <label for="content">Nội dung</label>
      <textarea name="content" id="summernote" >{{$row->content}}</textarea>
      @error('title')
        <div class="text-danger">{{$message}}</div>
      @enderror
      <input class="btn btn-primary" type="submit" value="Lưu">
      <a href="{{url('test')}}">
        <input class="btn btn-success" style="float: right;" type="button" value="Trở về">
      </a>
      
    </form>
  </div>
  
  
  <script>
    $(document).ready(function() {
        $('#summernote').summernote({height:200});
    });
  </script>
</body>
</html>