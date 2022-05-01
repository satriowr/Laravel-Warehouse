<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link rel="stylesheet" href="css/owl.carousel.min.css">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    
    <!-- Style -->
    <link rel="stylesheet" href="css/style.css">

    <title>Login | Warehouse</title>
  </head>
  <body>
  

  
  <div class="content">
    <div class="container">
      
      <div class="row">
        <div class="col-md-6">
          <img src="image/login-ils.svg" alt="Image" class="img-fluid" width="500px">
        </div>
        <div class="col-md-6 contents">
          <div class="row justify-content-center">
            <div class="col-md-8">
              <div class="mb-4">
              <h3>Sign In</h3>

              @if(session()->has('loginError'))
                <div class="alert alert-danger" role="alert">
                  {{ session('loginError') }}
                </div>
              @endif

              <p class="mb-4">Masuk untuk mengelola database</p>
            </div>
            <form action="/" method="POST" >
            @csrf
              <div class="form-group first">
                <label for="email">Email</label>
                <input type="text" class="form-control" name="email" autocomplete="off" id="email">
                
                @error('email')
                  <span class="invalid-feedback" role="alert">
                      <strong>{{ $message }}</strong>
                  </span>
                @enderror

              </div>
              <div class="form-group last mb-4" style="margin-top:12px">
                <label for="password">Password</label>
                <input type="password" class="form-control" name='password' autocomplete="off" id="password">
                
              </div>
              
              <div class="d-flex mb-5 align-items-center">
                <span class="ml-auto"><a href="#" class="forgot-pass">Forgot Password</a></span> 
              </div>

              <br>
              <input type="submit" value="Log In" class="btn btn-block" style="background-color:#06603B; color:white;">
              
            </form>
            </div>
          </div>
          
        </div>
        
      </div>
    </div>
  </div>

  
    <script src="js/jquery-3.3.1.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/main.js"></script>


  </body>
</html>