<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
    <!-- link css -->
    <link rel="stylesheet" href="{{ asset('css/index.css')}}">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.0/font/bootstrap-icons.css">
    <!-- link css end -->

    <title>ASUH SEPUH</title>
</head>

<body>
    <!-- start navbar -->

   <nav class="navbar navbar-expand-lg navbar-light bg-light fixed-top">
        <div class="container-fluid">
            <a class="navbar-brand" style="font-family:poppins, sans-serif;font-size:30px; color:#107EAD" href="{{ url('/') }}"><b>ASUH SEPUH</b></a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
            <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                <div class="navbar-nav">
                    <div class="container">
                        <div class="row ">
                            <div class="col-sm">
                                <a class="nav-link active" aria-current="page" style="font-family:poppins, sans-serif;font-size:18px; color:#939393;" href="/"><u>BERANDA</u></a>
                            </div>
                            <div class="col-sm">
                                <div class="dropdown">
                                    <button class="btn dropdown" type="button" style="font-family:poppins, sans-serif; font-size: 18px; color: #939393;" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false"><u>PROGRAM</u></button>
                                    <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                                        <li><a class="dropdown-item" href="{{ url('/program') }}">Bantuan Modal Usaha</a></li>
                                        <li><a class="dropdown-item" href="{{ url('/program') }}">Bantuan Biaya Hidup</a></li>
                                        <li><a class="dropdown-item" href="{{ url('/program') }}">Bantuan Pendidikan</a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="col-sm">
                                <a class="nav-link active" href="{{ url('/tentang-kami') }}" style="font-family:poppins, sans-serif;font-size:18px;color:#939393;"><u>TENTANG</u></a>
                            </div>
                            <div class="col-sm">
                                <div class="a">
                                    <a href="{{url('/donasi')}}">
                                    <button type="button" class="btn1" style="solid black; font-family:poppins, sans-serif;font-size:18px;">DONASI</button></a>
                                </div>
                            </div>
                            <div class="col-sm">
                                <a href="/login">
                                    <button type="button" class="btn2" style="font-family:poppins, sans-serif; font-size:18px;">MASUK/DAFTAR</button></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </nav>
    <!-- navbar end -->
    <!-- carousel slide starr -->

    <div id="carouselExampleCaptions" class="carousel slide " data-bs-ride="carousel">

        <div class="carousel-indicators">
            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="3" aria-label="Slide 4"></button>
        </div>
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="../img/gambar1.jpg" class="img-fluid d-block w-100" alt="...">

                <div class="carousel-caption d-none d-md-block carousel-fluid">
                    <h1 class="display-4">Bergabung Bersama Kami <br> Untuk Mewujudkan <br>Kebahagian Mereka</h1>
                    <button type="button" class="btn-success btn-fluid" style="font-family:poppins, sans-serif; font-size: 30px; border-radius: 10px; background-color: #A5CB52; border-color: #A5CB52; margin-left: 670px; margin-bottom: 100px;">Donasi Sekarang</button>
                </div>
            </div>
            <div class="carousel-item">
                <img src="../img/gambar2.jpg" class="img-fluid d-block w-100" alt="...">
                <div class="carousel-caption d-none d-md-block">
                    <h1 class="display-4">Bergabung Bersama Kami <br> Untuk Mewujudkan <br>Kebahagian Mereka</h1>
                    <button type="button" class="btn-success btn-fluid" style="font-family:poppins, sans-serif; font-size: 30px; border-radius: 10px; background-color: #A5CB52; border-color: #A5CB52; margin-left: 670px; margin-bottom: 100px;">Donasi Sekarang</button>
                </div>
            </div>
            <div class="carousel-item">
                <img src="../img/gambar3.jpg" class="img-fluid d-block w-100" alt="...">
                <div class="carousel-caption d-none d-md-block">
                    <h1 class="display-4">Bergabung Bersama Kami <br> Untuk Mewujudkan <br>Kebahagian Mereka</h1>
                    <button type="button" class="btn-success btn-fluid" style="font-family:poppins, sans-serif; font-size: 30px; border-radius: 10px; background-color: #A5CB52; border-color: #A5CB52; margin-left: 670px; margin-bottom: 100px;">Donasi Sekarang</button>
                </div>
            </div>
            <div class="carousel-item">
                <img src="../img/gambar4.jpg" class="img-fluid d-block w-100" alt="...">
                <div class="carousel-caption d-none d-md-block">
                    <h1 class="display-4">Bergabung Bersama Kami <br> Untuk Mewujudkan <br>Kebahagian Mereka</h1>
                    <button type="button" class="btn-success btn-fluid" style="font-family:poppins, sans-serif; font-size: 30px; border-radius: 10px; background-color: #A5CB52; border-color: #A5CB52; margin-left: 670px; margin-bottom: 100px;">Donasi Sekarang</button>
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

    <!-- carousel slide end -->

    <div class="heading-fluid mt-5">
        <h1 class=" text-center" style="font-family: poppins, sans-serif; font-size: 35px;">BERITA TERBARU</h1>
    </div>
    <!-- start card -->
    <div class="jumbotron" style="margin-left: 110px;">
        <div class="row">
            <div class="col-lg">
                <div class="card shadow p-3 mb-5 bg-body rounded " style="width: 18rem;">
                    <img src="../img/gambar2.jpg" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title" style="font-family: poppins, sans-serif;">Nenek Hidup Sebatang Kara</h5>
                    </div>
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item" style="font-family: poppins, sans-serif; font-size:14px;"><i class="bi bi-geo-alt-fill" style="font-size: 12px; color: #1993C8;"></i> kecamatan apel prov. mengkudu</li>
                        <li class="list-group-item" style="font-family: poppins, sans-serif; font-size: 12px; color: #939393;">hidup sebatang kara adalah hobi sang nenek, sehingga banyak yang mengasihaninya</li>
                    </ul>
                </div>
            </div>
            <div class="col-lg">
                <div class="card shadow p-3 mb-5 bg-body rounded " style="width: 18rem;">
                    <img src="../img/gambar2.jpg" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title" style="font-family: poppins, sans-serif;">Nenek Hidup Sebatang Kara</h5>
                    </div>
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item" style="font-family: poppins, sans-serif; font-size:14px;"><i class="bi bi-geo-alt-fill" style="font-size: 12px; color: #1993C8;"></i> kecamatan apel prov. mengkudu</li>
                        <li class="list-group-item" style="font-family: poppins, sans-serif; font-size: 12px; color: #939393;">hidup sebatang kara adalah hobi sang nenek, sehingga banyak yang mengasihaninya</li>
                    </ul>
                </div>
            </div>
            <div class="col-lg">
                <div class="card shadow p-3 mb-5 bg-body rounded " style="width: 18rem;">
                    <img src="../img/gambar2.jpg" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title" style="font-family: poppins, sans-serif;">Nenek Hidup Sebatang Kara</h5>
                    </div>
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item" style="font-family: poppins, sans-serif; font-size:14px;"><i class="bi bi-geo-alt-fill" style="font-size: 12px; color: #1993C8;"></i> kecamatan apel prov. mengkudu</li>
                        <li class="list-group-item" style="font-family: poppins, sans-serif; font-size: 12px; color: #939393;">hidup sebatang kara adalah hobi sang nenek, sehingga banyak yang mengasihaninya</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>

    <!-- end card -->
    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 200"><path fill="#1993C8" fill-opacity="1" d="M0,128L60,128C120,128,240,128,360,128C480,128,600,128,720,112C840,96,960,64,1080,53.3C1200,43,1320,53,1380,58.7L1440,64L1440,320L1380,320C1320,320,1200,320,1080,320C960,320,840,320,720,320C600,320,480,320,360,320C240,320,120,320,60,320L0,320Z"></path></svg>
    <footer class="footer">
        <p>create by kelompok2</p>
    </footer>
    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js " integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf " crossorigin="anonymous "></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.1/dist/umd/popper.min.js " integrity="sha384-SR1sx49pcuLnqZUnnPwx6FCym0wLsk5JZuNx2bPPENzswTNFaQU1RDvt3wT4gWFG " crossorigin="anonymous "></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.min.js " integrity="sha384-j0CNLUeiqtyaRmlzUHCPZ+Gy5fQu0dQ6eZ/xAww941Ai1SxSY+0EQqNXNE6DZiVc " crossorigin="anonymous "></script>
    -->
</body>

</html>