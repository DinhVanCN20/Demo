<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="./access/fonts/icomoon/style.css">

    <link rel="stylesheet" href="./access/css/owl.carousel.min.css">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="./access/css/bootstrap.min.css">
    
    <!-- Style -->
    <link rel="stylesheet" href="./access/css/style.css">

    <title>Login Admin</title>
  </head>
  <body>
  

  
  <div class="content">
    <div class="container">
      <div class="row">
        <div class="col-md-6">
          <img src="./access/images/undraw_remotely_2j6y.svg" alt="Image" class="img-fluid">
        </div>
        <div class="col-md-6 contents">
          <div class="row justify-content-center">
            <div class="col-md-8">
              <div class="mb-4">
              <h3>Sign In</h3>
              <p class="mb-4">Member with permission login only.</p>
            </div>
            <form action="{{route('Login')}}" method="post">
              @csrf
              {{--  @if(Session::has('success'))
                  <div class="alert alert-success">{{Session::get('success')}}</div>
              @endif
              @if(Session::has('fail'))
                  <div class="alert alert-danger">{{Session::get('fail')}}</div>
              @endif  --}}
              @if($message = Session::get('fail'))
                <div class="alert alert-danger">{{$message}}</div>
              @endif
              @error('username')
                <div class="alert alert-danger">{{$message}}</div>
              @enderror
              @error('password')
                <div class="alert alert-danger">{{$message}}</div>
              @enderror
              <div class="form-group first">
                <label for="username">Username</label>
                <input type="text" class="form-control" name="username" value="{{old('username')}}">
              </div>

              <div class="form-group last mb-4">
                <label for="password">Password</label>
                <input type="password" class="form-control" name="password">
              </div>
              
              <div class="d-flex mb-5 align-items-center">
                <label class="control control--checkbox mb-0"><span class="caption">Remember me</span>
                  <input type="checkbox" checked="checked" name="remember" id="remember"/>
                  <div class="control__indicator"></div>
                </label>
                <span class="ml-auto"><a href="{{route('signup')}}" class="Sign-up">Sign up</a></span> 
              </div>

              <input type="submit" value="Log In" class="btn btn-block btn-primary">
            </form>
            </div>
          </div>
          
        </div>
        
      </div>
    </div>
  </div>
  
    <script src="./access/js/jquery-3.3.1.min.js"></script>
    <script src="./access/js/popper.min.js"></script>
    <script src="./access/js/bootstrap.min.js"></script>
    <script src="./access/js/main.js"></script>
  </body>
</html>