@extends('layout.app')

@section('style')
    <link rel="stylesheet" href="{{{ asset('css/tentang.css')}}}">
@endsection

@section('content')
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
            <div class="col">
                <div class="card" style="border: 2px solid #1993C8; border-radius: 12px;">
                    <div class="card-body">
                        @if (count($errors) > 0)
                        <div class="alert alert-danger alert-dismissible fade show" role="alert">
                              <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                            <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                            </ul>
                        </div>
                        @endif
                        @if (Session::has('success'))
                        <div class="alert alert-success alert-dismissible fade show" role="alert">
                              <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                                <strong>{{Session::get('success')}}</strong>
                        </div>
                        @endif
                        <form class="formhubungi mt-2" method="post" action="{{ url('tentang-kami/send') }}">
                        @csrf
                            <div class="form-group ">
                                <label>Alamat Email</label>
                                <input type="text" name="name" class="form-control" value="" />
                            </div>
                            <div class="form-group mt-2 ">
                                <label>Nama</label>
                                <input type="text" name="email" class="form-control" value="" />
                            </div>
                            <div class="form-group mt-2 ">
                                <label>Pesan</label>
                                <textarea name="message" class="form-control"></textarea>
                            </div>
                            <input type="submit" name="send" class="btn btn-primary" value="Send" />
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
