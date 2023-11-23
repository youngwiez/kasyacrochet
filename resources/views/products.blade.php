<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Products</title>
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Cinzel:wght@600&family=Kanit&display=swap" rel="stylesheet">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" rel="stylesheet">
  <link rel="stylesheet" href="{{asset('css/product.css')}}">
</head>
<body>
  <nav class="navbar navbar-expand-lg bg-body-tertiary">
    <div class="container">
      <a class="navbar-brand brand-name" href="#"><span class="text-warning brand-text">KaSya</span> Crochet</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
        aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
          <li class="nav-item">
            <a class="nav-link" href="#">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">About Us</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Product</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Contact</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Login</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>
  <div id="carouselExampleCaptions" class="carousel slide">
    <div class="carousel-indicators">
      <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active"
        aria-current="true" aria-label="Slide 1"></button>
      <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1"
        aria-label="Slide 2"></button>
    </div>
    <div class="carousel-inner">
      <div class="carousel-item active">
        <img src="{{asset('img/slide1.jpg')}}" class="d-block w-100" alt="...">
        <div class="carousel-caption">
          <h5>KaSya Crochet</h5>
          <p>Your one-stop crocheting appliances.</p><br>
        </div>
      </div>
      <div class="carousel-item">
        <img src="{{asset('img/slide2.jpg')}}" class="d-block w-100" alt="...">
        <div class="carousel-caption">
          <h5>KaSya Crochet</h5>
          <p>See our stunning products here!</p><br>
        </div>
      </div>
    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Next</span>
    </button>
  </div>
  <br>
  <div class="container text-center product">
    <h1>Our Products</h1>
    <div class="row justify-content-center mb-3">
      @foreach ($barang as $rowbarang)
      <div class="col-md-3 mb-3 mt-3">
        <div class="card">
          <img src="{{ asset('img/' . $rowbarang->foto) }}" class="card-image-top" style="height: 300px" alt="...">
          <div class="card-body">
            <h3>{{ $rowbarang->nama }}</h3>
            <h5>{{ $rowbarang->harga }}</h5>
          </div>
          <div class="btn" style="border: none" >
            <a href="#Preview{{ $loop->iteration }}" class="btn btn-warning" data-bs-toggle="modal" data-bs-target="#Preview{{ $loop->iteration }}">
              <i class="fa-solid fa-eye"></i> Preview
            </a>
          </div>
        </div>
      </div>
      @if ($loop->iteration % 4 == 0)
      <div class="row">
        @endif
        @endforeach
      </div>
    </div>
  </div>

  @foreach ($barang as $index => $rowbarang)
  <div class="modal fade" id="Preview{{ $loop->iteration }}" tabindex="-1" aria-labelledby="cardModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="cardModalLabel">{{ $rowbarang->nama }}</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          <div class="card mb-3">
            <div class="row g-0">
              <div class="col-md-4">
                <img src="{{ asset('img/' . $rowbarang->foto) }}" class="img-fluid rounded-start" alt="...">
              </div>
              <div class="col-md-8">
                <div class="card-body">
                  <h5 class="card-title">{{ $rowbarang->nama }}</h5>
                  <p class="card-text">{{ $rowbarang->deskripsi }}</p>
                  <p class="card-text"><small class="text-muted">{{ $rowbarang->harga }}</small></p>
                  <button type="button" class="btn btn-warning" data-bs-dismiss="modal">
                    <i class="fa-solid fa-cart-shopping"></i> Add to Cart
                  </button>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  @endforeach

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