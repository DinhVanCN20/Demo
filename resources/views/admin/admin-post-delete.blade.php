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

    <h1>Xoá tin tức</h1>
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
          <input disabled type="text" class="form-control" value="{{$row->title}}" name="title" require>
          @error('title')
            <div class="text-danger">{{$message}}</div>
          @enderror
        </div>
      </div>
      
      <div class="form-group row">
        <label for="file" class="col-sm-1 col-form-lable">Ảnh mô tả</label>
        <div class="col-sm-11">
          <img src="{{url('uploads/'.$row->image)}}" style="width:150px;">
          @error('title')
            <div class="text-danger">{{$message}}</div>
          @enderror
        </div>
      </div> 
      
      <div class="form-group row">
        <label for="file" class="col-sm-1 col-form-lable">Mô tả</label>
        <div class="col-sm-11">
          <input disabled type="text" class="form-control" value="{{$row->description}}" name="description">
          @error('title')
            <div class="text-danger">{{$message}}</div>
          @enderror
        </div>
      </div>
      
      <input class="btn btn-danger" style="float: right;" type="submit" value="Xoá">
      <a href="{{url('test')}}">
        <input class="btn btn-success" type="button" value="Trở về">
      </a>
      
    </form>
  </div>
  
</body>
</html>