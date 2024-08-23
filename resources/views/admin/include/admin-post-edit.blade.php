
  <div class="container-fluid col-lg-10 "> 
    <form method="POST" enctype="multipart/form-data" class="">
      @csrf

      <div class="input-group input-group-outline">
        <label for="file" class="col-sm-1 col-form-lable" style="size: 20px">Loại</label>
        
        <div class="col-sm-11">
          <input name="type" value="1"
          @if($row->category_id == 1)
            {{"checked"}}
          @endif
          type="radio">Tin tức &nbsp;
          
          <input name="type" value="2"
          @if($row->category_id == 2)
            {{"checked"}}
          @endif
          type="radio">Sự kiện
        </div>
      </div><br> 

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
      
      <div class="input-group input-group-outline">
        <div class="col-sm-11">
          <label for="content" class="col-sm-1 col-form-lable">Nội dung</label>
          <textarea class="ckeditor form-control" name="content" id="content">{{$row->content}}</textarea> 
        </div>
      </div>
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