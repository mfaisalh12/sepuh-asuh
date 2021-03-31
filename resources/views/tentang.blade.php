<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
    <link rel="stylesheet" href="{{{ asset('css/tentang.css')}}}">
    <title>Tentang</title>
</head>

<body>
    <!--Bagian Navbar-->
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
    <!--Bagian Menghubungkan orang baik-->
    <div class="jumbotron jumbotron-fluid">
        <div class="container text-center">
            <h1 class="display-4" style="font-family: poppins,sans-serif; font-size: 42px; color: #fff;"><b>Menghubungkan #OrangBaik.<br>Bergotong-Royong Ciptakan Kebaikan</b>
            </h1>
            <img class="img" src="img/image 1.png">
        </div>
    </div>
    <!--Bagian PUTIH-->
    <div class="container text-center p-5 ">
        <h1 style="font-family: poppins, sans-serif; color: #1993C8;"><b> Menghubungkan Jutaan Kebaikan</b></h1>
        <br/>
        <br>
        <h2 style="font-family: poppins, sans-serif; font-size: 34px;">Merawatnya dengan kesabaran dan kebaikan bukan karena mereka <br> baik tapi karenamu. Dengan berdonasi, kamu telah menjadi <br> Pahlawan bagi Mereka.
        </h2>
        <br>
        <br>
    </div>


    <!--Bagian DEKSRIPSI TIM-->
    <div class="container-fluid" style="background-color: #1993C8; text-align: center; color: #fff;;">
        <h3 style="font-family: poppins, sans-serif;  font-size: 46px; color:#fff"><b>Tim Kami</b></h3>
        <div class="card" style="background-color:#1993C8 ; border-color: #1993C8;">
            <div class="container mt-5">
                <div class="row " style="margin-left: 35px; ">
                    <div class="col-sm ">
                        <div class="card " style="width: 18rem; border-radius: 12px; ">
                            <img src="img/Fauzi.png " class="card-img-top " style="border-radius: 12px; " alt="... ">
                            <div class="card-body ">
                                <h5 class="card-title " style="font-family: poppins, sans-serif; font-size: 24px; color:black ">
                                    <b>Fauzi Sofyan</b>
                                </h5>
                                <p class="card-text " style="font-family: poppins, sans-serif; font-size: px; color:black ">UI/UX Designer</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm ">
                        <div class="card " style="width: 18rem; border-radius: 12px; ">
                            <img src="img/Daffa.png " class="card-img-top " style="border-radius: 12px; " alt="... ">
                            <div class="card-body ">
                                <h5 class="card-title " style="font-family: poppins, sans-serif; font-size: 24px; color:black ">
                                    <b>Muhammad Dafa</b>
                                </h5>
                                <p class="card-text " style="font-family: poppins, sans-serif; font-size: px; color:black ">Backend Developer</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm ">
                        <div class="card " style="width: 18rem; border-radius: 12px; ">
                            <img src="img/Putri.png " class="card-img-top " style="border-radius: 12px; " alt="... ">
                            <div class="card-body ">
                                <h5 class="card-title " style="font-family: poppins, sans-serif; font-size: 24px; color:black ">
                                    <b>Putri Mellia Z</b>
                                </h5>
                                <p class="card-text " style="font-family: poppins, sans-serif; font-size: px; color:black ">Frontend Developer</p>
                            </div>
                        </div>
                    </div>
                </div>


            </div>
            <div class="container mt-5">
                <div class="row " style="margin-left: 35px; ">
                    <div class="col-sm ">
                        <div class="card " style="width: 18rem; border-radius: 12px; ">
                            <img src="img/tio.jpeg " class="card-img-top " style="border-radius: 12px; height: 260px;" alt="... ">
                            <div class="card-body ">
                                <h5 class="card-title " style="font-family: poppins, sans-serif; font-size: 24px; color:black ">
                                    <b>Agustio</b>
                                </h5>
                                <p class="card-text " style="font-family: poppins, sans-serif; font-size: px; color:black ">Frontend Developer</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm ">
                        <div class="card " style="width: 18rem; border-radius: 12px; ">
                            <img src="img/faisal.png " class="card-img-top " style="border-radius: 12px; " alt="... ">
                            <div class="card-body ">
                                <h5 class="card-title " style="font-family: poppins, sans-serif; font-size: 24px; color:black ">
                                    <b>M Faisal H</b>
                                </h5>
                                <p class="card-text " style="font-family: poppins, sans-serif; font-size: px; color:black ">Backend Developer</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm ">
                        <div class="card " style="width: 18rem; border-radius: 12px; ">
                            <img src="img/Raif.png " class="card-img-top " style="border-radius: 12px; " alt="... ">
                            <div class="card-body ">
                                <h5 class="card-title " style="font-family: poppins, sans-serif; font-size: 24px; color:black ">
                                    <b>Raif Haidar</b>
                                </h5>
                                <p class="card-text " style="font-family: poppins, sans-serif; font-size: px; color:black ">Backend Developerr</p>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>

    </div>
    <!-- BAGIAN HUBUNGI KAMI-->
    <div class="container-fluid mt-5 " style="background-color: #fff;">
        <div class="row ">
            <div class="col text-center ">
                <h3 class="text-center text-info" style="font-family: poppins, sans-serif; font-size: 40; color: #1993C8;"><b>Hubungi Kami</b></h3>
                <h5 class="text-center mt-4" style="font-family: poppin, sans-serif; font-size: 24px; color: black;;">Apabila terdapat kekurangan <br> informasi/ pesan, silahkan isi <br> form di samping! Terima Kasih</h5>
            </div>
            <div class="col ">
                <div class="card" style="border: 2px solid #1993C8; border-radius: 12px;">
                    <div class="card-body">
                        <form class="formhubungi mt-2 ">
                            <div class="form-group ">
                                <label for="exampleInputEmail1 ">Alamat Email</label>
                                <input type="email " style="border: 1px solid #1993C8;" class="form-control " id="exampleInputEmail1 " aria-describedby="emailHelp " placeholder="Enter email ">
                            </div>
                            <div class="form-group mt-2 ">
                                <label for="exampleInputPassword1 ">Nama</label>
                                <input type="password " style="border: 1px solid #1993C8;" class="form-control " id="exampleInputPassword1 " placeholder="Masukan Nama Anda disini! ">
                            </div>
                            <div class="form-group mt-2 ">
                                <label for="exampleInputPassword1 ">Subjek</label>
                                <input type="password " style="border: 1px solid #1993C8;" class="form-control " id="exampleInputPassword1 " placeholder="Silahkan Isi disini! ">
                            </div>
                            <div class="form-group mt-2 ">
                                <label for="exampleInputPassword1 ">Pesan</label>
                                <input type="password " style="border: 1px solid #1993C8;" class="form-control " id="exampleInputPassword1 " placeholder="Ketikan Pesan Anda disini! ">
                            </div>

                            <button type="submit " class="btn btn-primary mt-2  ">Submit</button>
                        </form>
                    </div>
                </div>

            </div>
        </div>
    </div>
    <!-- footer -->
    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 200"><path fill="#1993C8" fill-opacity="1" d="M0,128L60,128C120,128,240,128,360,128C480,128,600,128,720,112C840,96,960,64,1080,53.3C1200,43,1320,53,1380,58.7L1440,64L1440,320L1380,320C1320,320,1200,320,1080,320C960,320,840,320,720,320C600,320,480,320,360,320C240,320,120,320,60,320L0,320Z"></path></svg>
    <footer class="footer">
        <p class=" text-center" style="background-color: #1993C8;">create by kelompok2</p>
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