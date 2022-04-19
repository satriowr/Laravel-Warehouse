<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="/docs/4.0/assets/img/favicons/favicon.ico">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <title>Login | Warehouse</title>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
  </head>
    
  <body>
    <div class="container d-flex justify-content-between" style="display:flex; flex-direction:row">
        <div class="form-login" style="width: 500px; margin-top: 250px">

          @if(session()->has('loginError'))
            <div class="alert alert-danger" role="alert">
              {{ session('loginError') }}
            </div>
          @endif

            <form action="/login" class="form-signin" method="POST">
                @csrf
                <h1 class="h3 mt-4 mb-3 font-weight-normal">Please sign in</h1>
                <input type="email" name="email" id="inputEmail" class="form-control @error('email') is-invalid @enderror" placeholder="Email address" required autofocus>
                @error('email')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
                <input type="password" name="password" id="inputPassword" class="form-control" style="margin-top:10px" placeholder="Password" required>
                <button type="submit" class="btn btn-primary" style="margin-top:20px">Sign in</button>
          
                <p class="mt-5 mb-3 text-muted">
                    Smart Warehouse
                </p>
            </form>
        </div>

        <div class="image-login">
            <img src="image\login-image.png" alt="" width="500px" height="300px" style="margin-top: 220px">
        </div>
        
    </div>
  </body>
</html> 