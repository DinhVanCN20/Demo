
  <div class="container-fluid col-lg-10 "> 
    <form method="POST" enctype="multipart/form-data" class="">
      @csrf
      {{--  @if($errors->any())
        {{ implode('', $errors->all('<div>:message</div>')) }}
      @endif  --}}
      <div class="input-group input-group-outline">
        <label for="file" class="col-sm-1 col-form-lable">Tiêu đề</label>
        <div class="col-sm-11">
          <input disabled type="text" class="form-control" value="{{$row->title}}" name="title" require>
          @error('title')
            <div class="text-danger">{{$message}}</div>
          @enderror
        </div>
      </div><br>
      
      <div class="input-group input-group-outline">
        <label for="file" class="col-sm-1 col-form-lable">Ảnh mô tả</label>
        <div class="col-sm-11">
          <img src="{{url('uploads/'.$row->image)}}" style="width:150px;">
          @error('title')
            <div class="text-danger">{{$message}}</div>
          @enderror
        </div>
      </div> <br>
      
      <div class="input-group input-group-outline">
        <label for="file" class="col-sm-1 col-form-lable">Mô tả</label>
        <div class="col-sm-11">
          <input type="text" class="form-control" value="{{$row->description}}" name="description" disabled>
          @error('title')
            <div class="text-danger">{{$message}}</div>
          @enderror
        </div>
      </div><br>
      
      <input class="btn btn-danger" style="float: right;" type="submit" value="Xoá">
      <a href="{{url('test')}}">
        <input class="btn btn-success" type="button" value="Trở về">
      </a>
      
    </form>
  </div>