<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Font -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;300;400;500;600;700;800;900&display=swap" rel="stylesheet">
    
    <!-- style -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ asset('css/donasi.css')}}">

    <title>Asuh Sepuh</title>
</head>
<body>
    <div class="container-donasi">
        <div class="row">
            <div class="col-md-12">
                <a href="{{ url('program') }}" class="btn btn-primary"><i class="fa fa-arrow-left"></i> Kembali</a>
            </div>
            <div class="col-md-12 mt-2">
                <div aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="{{ url('program') }}">Program</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Donasi</li>
                    </ol>
                </div>
            </div>
            <div class="col-md-12">
                @if ($errors->any())
                <div class="alert alert-danger alert-dismissible fade show" role="alert">
                    <ul>
                        @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
                @endif
                
                <div class="card">
                    <div class="card-body">
                        <div class="row">
                            <div class="pe-5 ps-5 pt-3">
                                <form action="/donasi" class="row g-3" method="POST">
                                @csrf
                                    <div class="col-12">
                                        <label for="inputNama" class="form-label">Nama</label>
                                        <input type="text" class="form-control" id="inputName">
                                    </div>
                                    <div class="col-12">
                                        <label for="inputDonasi" class="form-label">Jumlah Donasi</label>
                                        <input type="text" class="form-control" id="inputDonasi" name="jumlah_donasi">
                                        <?$jumlah_donasi = $_POST["jumlah_donasi"];?>
                                    </div>   
                                    <select class="form-select form-select-md mb-4" aria-label=".form-select-lg example">
                                        <option selected>Pilih Program yang akan di donasi</option>
                                        <option value="1">Modal Usaha</option>
                                        <option value="2">Biaya Hidup</option>
                                        <option value="3">Biaya Pendidikan</option>
                                    </select>
                                    
                                    <select class="form-select form-select-md" aria-label=".form-select-sm example">
                                        <option selected>Pilih Orang yang akan di donasi</option>
                                        <option value="1">Orang 1</option>
                                        <option value="2">Orang 2</option>
                                        <option value="3">Orang 3</option>
                                    </select>
                                    <div class="mb-3">
                                        <label for="formFile" class="form-label">Bukti Pembayaran</label>
                                        <div>
                                            <b>No. Rekening : 32144123XXXXXXXX (BANK A)<br>No. Rekening : 32413412XXXXXXXX (BANK B)</b>
                                        </div>
                                        <input class="form-control mt-4" type="file" id="formFile" name="bukti_donasi">
                                        <?$bukti_donasi = $_POST["bukti_donasi"];?>
                                    </div>
                                    <div class="mb-3">
                                        <button type="submit" class="btn btn-primary">Donasi</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>  
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>
</body>
</html>




    <!-- end card -->
