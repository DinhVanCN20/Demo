
  <div class="container-fluid col-lg-10 "> 
    <form method="POST" enctype="multipart/form-data" class="">
      @csrf
      {{--  @if($errors->any())
        {{ implode('', $errors->all('<div>:message</div>')) }}
      @endif  --}}
      <div class="input-group input-group-outline">
        <label for="file" class="col-sm-1 col-form-lable">Tiêu đề</label>
        <div class="col-sm-11">
          <input type="text" class="form-control" placeholder="Tiêu đề" name="title" value="{{$row->title}}">
          @error('title')
            <div class="text-danger">{{$message}}</div>
          @enderror
        </div>
      </div> <br> 
      
      <div class="input-group input-group-outline">
        <label for="file" class="col-sm-1 col-form-lable">Ảnh mô tả</label>
        <div class="col-sm-11">
          <input type="file" class="form-control" name="file">
          <img src="{{url('uploads/'.$row->image)}}" style="width:150px;">
          @error('title')
            <div class="text-danger">{{$message}}</div>
          @enderror
        </div>
      </div> <br> 
      
      <div class="input-group input-group-outline">
        <label for="file" class="col-sm-1 col-form-lable">Mô tả</label>
        <div class="col-sm-11">
          <input type="text" class="form-control" value="{{$row->description}}" name="description">
          @error('title')
            <div class="text-danger">{{$message}}</div>
          @enderror
        </div>
      </div><br> 
      
      <label for="content">Nội dung</label>
      <textarea name="content" id="summernote" >{{$row->content}}</textarea>
      @error('title')
        <div class="text-danger">{{$message}}</div>
      @enderror
      <br> 
      <input class="btn btn-primary" type="submit" value="Lưu">
      <a href="{{url('test')}}">
        <input class="btn btn-success" style="float: right;" type="button" value="Trở về">
      </a>
      
    </form>
  </div>