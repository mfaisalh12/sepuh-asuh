<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
    <!-- css link -->
    <link rel="stylesheet" href="{{ asset('css/program.css')}}">
    <title>Program</title>
    <!-- script -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ==" crossorigin="anonymous"></script>
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
                                <a class="nav-link active" href="/" style="font-family:poppins, sans-serif;font-size:18px;color:#939393;"><u>TENTANG</u></a>
                            </div>
                            <div class="col-sm">
                                <div class="a">
                                    <button type="button" class="btn1" style="solid black; font-family:poppins, sans-serif;font-size:18px;">DONASI</button>
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
    <!-- card start -->
    <div class="jumbotron">
        <div class="row">
        @foreach($program as $program)
            <div class="col-lg">
                <div class="card shadow p-3 mb-5 bg-body rounded" style="width: 348px;;">
                    <img src="{{ url('uploads') }}/{{ $program->img_program }}" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title text-start" style="font-family: poppins, sans-serif; font-size: 20px;"><b>{{ $program->berita_program }}</b></h5>
                    </div>
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item">
                            <div class="progress">
                                <div class="progress-bar" role="progressbar" style="width: 65%; background-color: #1993C8; border-radius: 20px;;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                            <div class="char-name" style="opacity: 60%; font-family: poppins,sans-serif; font-size: 12px;">Terkumpul</div>
                            <div class="char-name" style="font-weight: bold; font-family: poppins, sans-serif; font-size: 14px;">Rp. {{ number_format($program->jumlah_donasi) }}</div>
                        </li>
                    </ul>
                </div>
            </div>
        @endforeach
        </div>
    </div>

    <!-- card end -->
    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 200"><path fill="#1993C8" fill-opacity="1" d="M0,128L60,128C120,128,240,128,360,128C480,128,600,128,720,112C840,96,960,64,1080,53.3C1200,43,1320,53,1380,58.7L1440,64L1440,320L1380,320C1320,320,1200,320,1080,320C960,320,840,320,720,320C600,320,480,320,360,320C240,320,120,320,60,320L0,320Z"></path></svg>
    <footer class="footer">
        <p>created by kelompok2</p>
    </footer>
    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.1/dist/umd/popper.min.js" integrity="sha384-SR1sx49pcuLnqZUnnPwx6FCym0wLsk5JZuNx2bPPENzswTNFaQU1RDvt3wT4gWFG" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.min.js" integrity="sha384-j0CNLUeiqtyaRmlzUHCPZ+Gy5fQu0dQ6eZ/xAww941Ai1SxSY+0EQqNXNE6DZiVc" crossorigin="anonymous"></script>
    -->
</body>

</html>