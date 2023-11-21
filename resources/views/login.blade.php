<!doctype html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
	<meta content="IE=edge" http-equiv="X-UA-Compatible">
	<meta content="width=device-width, initial-scale=1.0" name="viewport">
	<title>Login</title>
	<!-- All CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Cinzel:wght@500&display=swap" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" rel="stylesheet">
	<link href="{{asset('css/login.css')}}" rel="stylesheet">
  </head>
  <body>

    <section class="login d-flex justify-content-between">
        <div class="login-left w-50 h-100">
          <div class="row justify-content-center align-items-center h-100">
            <div class="col-6">
              <div class="header">
                <h1>Welcome back</h1>
                <p>Welcome back! Please enter your details.</p>
              </div>
              <div class="login-form">
                <label for="email" class="form-label">Email</label>
                <input type="email" class="form-control" id="email" placeholder="Enter your email">

                <label for="password" class="form-label">Password</label>
                <input type="password" class="form-control" id="password" placeholder="Enter your password">
                <a href="#" class="text-decoration-none text-center">Forgot password</a>
                <button class="signin btn btn-warning">Sign In</button>

                <div class="text-center">
                  <span class="d-inline">Don't have an account? <a href="/register" class="signup d-inline text-decoration-none">Sign up for free</a></span>
                </div>
            </div>
          </div>
        </div>

        <div class="login-right w-100 h-100 bg-warning">
          <!-- <div id="carouselExampleFade" class="carousel slide carousel-fade" data-bs-ride="carousel">
            <div class="carousel-inner">
              <div class="carousel-item active">
                <img src="{{asset('img/slide1.jpg')}}" class="d-block w-100" alt="#">
                <div class="carousel-caption d-none d-md-block">
                </div>
              </div>
            </div>
          </div> -->
        </div>
    </section>

	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL"
    crossorigin="anonymous"></script>
  </body>
</html>