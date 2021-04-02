@extends('layout.app')

@section('style')
    <link rel="stylesheet" href="{{ asset('css/program.css')}}">
@endsection

@section('content')
    <!-- card start -->
    <div class="card-container">
        <div>
            <div class="row">
            @foreach($program as $item)
                <div class="col-lg-4">
                    <div class="card shadow p-3 mb-5 bg-body rounded" style="width: 348px;;">
                        <img src="{{ url('uploads') }}/{{ $item->img_program }}" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title git add ." style="font-size: 18px;"><b>{{ $item->berita_program }}</b></h5>
                        </div>
                        <ul class="list-group list-group-flush">
                            <li class="list-group-item">
                                <div class="progress">
                                    <div class="progress-bar" role="progressbar" style="width: 65%; background-color: #1993C8; border-radius: 20px;;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                                <div class="char-name" style="opacity: 60%; font-family: poppins,sans-serif; font-size: 12px;">Terkumpul</div>
                                <div class="char-name" style="font-weight: bold; font-family: poppins, sans-serif; font-size: 14px;">Rp. {{ number_format($item->jumlah_donasi) }}</div>
                            </li>
                        </ul>
                    </div>
                </div>       
            @endforeach
            </div>
        </div>
        <div class="container">
            {{$program->links()}}
        </div>
    </div>

@endsection