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
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="./access/css/bootstrap.min.css">
    
    <!-- Style -->
    <link rel="stylesheet" href="./access/css/style.css">

    <title>Sign up</title>
  </head>
  <body>
  

  
  <div class="content">
    <div class="container">
      <div class="row">
        <div class="col-md-mt-8 contents">
          <div class="row justify-content-center">
            <div class="col-md-8">
              <div class="mb-4">
              <h3>Sign Up</h3>
              <p class="mb-4">Member with permission login only.</p>
            </div>
            <form action="#" method="post">
              @csrf
              <div class="form-group first">
                <label for="username">Username</label>
                <input type="text" class="form-control" name="username" value="{{old('username')}}">
                @error('username')
                  <div class="text-danger">{{$message}}</div>
                @enderror
              </div>
              
              <div class="form-group">
                <label for="password">Password</label>
                <input type="password" class="form-control" name="password">
                @error('password')
                  <div class="text-danger">{{$message}}</div>
                @enderror
              </div>
              
              <div class="form-group last mb-4">
                <label for="cf-password">Confirm Password</label>
                <input type="password" class="form-control" name="confirmpass">
                  @error('confirmpass')
                    <div class="text-danger">{{$message}}</div>
                  @enderror
              </div>

              <div class="d-flex mb-5 align-items-center">
                <label class="control control--checkbox mb-0"><span class="caption">Remember me</span>
                  <input type="checkbox" checked="checked"/>
                  <div class="control__indicator"></div>
                </label>
                <span class="ms-auto"><a href="{{route('signin')}}" class="Sign-in">Sign in</a></span> 
              </div>

              <input type="submit" value="Create" class="btn btn-block btn-primary">
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
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js" integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy" crossorigin="anonymous"></script>
  </body>
</html>