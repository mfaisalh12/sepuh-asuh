@extends('layout.app')

@section('style')
    <link rel="stylesheet" href="{{ asset('css/index.css')}}">
@endsection

@section('content')
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
                <img src="../uploads/gambar1.jpg" class="img-fluid d-block w-100" alt="...">

                <div class="carousel-caption d-none d-md-block carousel-fluid">
                    <h1 class="display-4">Bergabung Bersama Kami <br> Untuk Mewujudkan <br>Kebahagian Mereka</h1>
                    <button type="button" class="btn-success btn-fluid" style="font-family:poppins, sans-serif; font-size: 30px; border-radius: 10px; background-color: #A5CB52; border-color: #A5CB52; margin-left: 670px; margin-bottom: 100px;">Donasi Sekarang</button>
                </div>
            </div>
            <div class="carousel-item">
                <img src="../uploads/gambar2.jpg" class="img-fluid d-block w-100" alt="...">
                <div class="carousel-caption d-none d-md-block">
                    <h1 class="display-4">Bergabung Bersama Kami <br> Untuk Mewujudkan <br>Kebahagian Mereka</h1>
                    <button type="button" class="btn-success btn-fluid" style="font-family:poppins, sans-serif; font-size: 30px; border-radius: 10px; background-color: #A5CB52; border-color: #A5CB52; margin-left: 670px; margin-bottom: 100px;">Donasi Sekarang</button>
                </div>
            </div>
            <div class="carousel-item">
                <img src="../uploads/gambar3.jpg" class="img-fluid d-block w-100" alt="...">
                <div class="carousel-caption d-none d-md-block">
                    <h1 class="display-4">Bergabung Bersama Kami <br> Untuk Mewujudkan <br>Kebahagian Mereka</h1>
                    <button type="button" class="btn-success btn-fluid" style="font-family:poppins, sans-serif; font-size: 30px; border-radius: 10px; background-color: #A5CB52; border-color: #A5CB52; margin-left: 670px; margin-bottom: 100px;">Donasi Sekarang</button>
                </div>
            </div>
            <div class="carousel-item">
                <img src="../uploads/gambar4.jpg" class="img-fluid d-block w-100" alt="...">
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
        <h1 class="text-center blue-title">BERITA TERBARU</h1>
    </div>
    <!-- start card -->
    <div class="container-berita">
        <div class="row">
        @foreach($beranda as $beranda)
            <div class="col justify-content-center">
                <div class="card shadow mb-5">
                    <img src="{{ url('uploads') }}/{{ $beranda->img }}" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title" style="font-family: poppins, sans-serif;">{{ $beranda->judul }}</h5>
                    </div>
                    <ul class="list-group list-group-flush card-text-body">
                        <li class="list-group-item" style="font-family: poppins, sans-serif; font-size:14px;"><i class="bi bi-geo-alt-fill" style="font-size: 12px; color: #1993C8;"></i> {{ $beranda->alamat }}</li>
                        <li class="list-group-item" style="font-family: poppins, sans-serif; font-size: 12px; color: #939393;">{{ $beranda->berita }}</li>
                    </ul>
                </div>
            </div>
        @endforeach
        </div>
    </div>

    <!-- end card -->
@endsection