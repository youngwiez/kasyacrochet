<!DOCTYPE html>
<html lang="en">
<!--divinectorweb.com-->
<head>
    <meta charset="UTF-8">
	<meta content="IE=edge" http-equiv="X-UA-Compatible">
	<meta content="width=device-width, initial-scale=1.0" name="viewport">
	<title>Product</title>
	<!-- All CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Cinzel:wght@500&display=swap" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" rel="stylesheet">
	<link href="{{asset('css/product.css')}}" rel="stylesheet">
</head>
<body>
	<nav class="navbar navbar-expand-lg navbar-light bg-light fixed-top">
		<div class="container">
			<a class="navbar-brand" href="/"><span class="text-warning">KaSya</span>Crochet</a> <button aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation" class="navbar-toggler" data-bs-target="#navbarSupportedContent" data-bs-toggle="collapse" type="button"><span class="navbar-toggler-icon"></span></button>
			<div class="collapse navbar-collapse" id="navbarSupportedContent">
				<ul class="navbar-nav ms-auto mb-2 mb-lg-0">
					<li class="nav-item">
						<a class="nav-link" href="/">Home</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="/product">Product</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="/contact">Contact</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="/login">Login</a>
					</li>
				</ul>
			</div>
		</div>
	</nav>
	<div class="carousel slide" data-bs-ride="carousel" id="carouselExampleIndicators">
		<div class="carousel-indicators">
			<button aria-label="Slide 1" class="active" data-bs-slide-to="0" data-bs-target="#carouselExampleIndicators" type="button"></button> 
            <button aria-label="Slide 2" data-bs-slide-to="1" data-bs-target="#carouselExampleIndicators" type="button"></button>
		</div>
		<div class="carousel-inner">
			<div class="carousel-item active">
				<img alt="..." class="d-block w-100" src="{{asset('img/slide2.jpg')}}">
				<div class="carousel-caption">
					<h5>KaSya Crochet</h5>
					<p>Your one stop crocheting appliances</p>
				</div>
			</div>
			<div class="carousel-item">
				<img alt="..." class="d-block w-100" src="{{asset('img/slide1.jpg')}}">
				<div class="carousel-caption">
					<h5>KaSya Crochet</h5>
					<p>Find our interesting product here!</p>
				</div>
			</div>
		</div>
        <button class="carousel-control-prev" data-bs-slide="prev" data-bs-target="#carouselExampleIndicators" type="button">
            <span aria-hidden="true" class="carousel-control-prev-icon"></span> <span class="visually-hidden">Previous</span></button> 
        <button class="carousel-control-next" data-bs-slide="next" data-bs-target="#carouselExampleIndicators" type="button">
            <span aria-hidden="true" class="carousel-control-next-icon"></span> <span class="visually-hidden">Next</span></button>
	</div>
    
    <div class="container text-center product mt-5">
        <h1>Our Products</h1>
        <a href="/add" class="btn btn-warning">Add Product</a>
    </div>

    <div class="container text-center mb-5">
        <div class="row">
            @forelse ($barang as $rowbarang)
            <div class="col-md-3 mt-4">
                <div class="card">
                    <img src="{{asset('img/' . $rowbarang->foto)}}" class="card-image-top" alt="..." style="object-fit: cover; height: 250px; width: 100%; border-radius:4px">
                    <div class="card-body">
                        <h3>{{ $rowbarang->nama }}</h3>
                        <p>Deskripsi</p>
                        <h5>{{ $rowbarang->harga }}</h5>
                    </div>
                    <div class="btn" style="border:none;">
                      <form onsubmit="return confirm('Apakah Anda Yakin ?');" action="" method="POST">
                        <a href="" class="btn btn-sm btn-dark"><i class="fa fa-eye"></i></a>
                        <a href="" class="btn btn-sm btn-primary"><i class="fa fa-pencil-alt"></i></a>
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-sm btn-danger"><i class="fa fa-trash"></i></button>
                      </form>
                    </div>
                </div>
            </div>
            @if ($loop->iteration % 4 == 0)
            </div><div class="row">
            @endif
            @endforeach
        </div>
    </div>

    <footer class="bg-dark text-white pt-5 pb-5">
    <div class="container text-md-left">
      <div class="row text-md-left">
        <div class="col-md-3 col-lg-3 col-xl-3 mx-auto mt-3">
          <h5 class="mb-4 font-weight-bold text-warning">KaSya Crochet</h5>
          <p>Your one-stop crocheting appliances</p>
        </div>

        <div class="col-md-3 col-lg-3 col-xl-3 mx-auto mt-3">
          <h5 class="mb-4 font-weight-bold text-warning">Find Us</h5>
          <p><a href="#" class="text-light" style="text-decoration: none">
            Jl. Mbakalan No. 61D, <br>Ngabean Wetan RT. 02 RW. 37,
            Sinduharjo, Ngaglik, Sleman, Yogyakarta 55581</a></p>
        </div>

        <div class="col-md-4 col-lg-3 col-xl-4 mx-auto mt-3">
          <h5 class="mb-4 font-weight-bold text-warning">Reach Us</h5>
          <p><i class="fa-brands fa-whatsapp"></i>
          <a href="#" class="text-light" style="text-decoration: none">  +62 821-4038-8090</p>
          <p><i class="fa-brands fa-instagram"></i>
            <a href="#" class="text-light" style="text-decoration: none">  kasyacrochet</a></p>
        </div>

        <div class="row text-md-left">
          <div class="col-md-7 col-lg-12 mt-5 text-center">
            <p>Copyright ©2023 All rights reserved by
              <a href="#" class="text-warning" style="text-decoration: none">KaSya Crochet</a>
            </p>
          </div>
        </div>
      </div>
    </div>
    </footer>

	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL"
    crossorigin="anonymous"></script>
</body>
</html>