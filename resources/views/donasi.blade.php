@extends('layout.app')

@section('style')
    <link rel="stylesheet" href="{{ asset('css/index.css')}}">
@endsection

@section('content')
    <h1>DONASI</h1>
    <a href="/">
      <button class="btn btn-primary" type="submit">Back</button></a>

      @if ($errors->any())
      <div class="alert alert-danger">
          <ul>
              @foreach ($errors->all() as $error)
                  <li>{{ $error }}</li>
              @endforeach
          </ul>
      </div>
    @endif
    
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
        
          <select class="form-select form-select-lg mb-3" aria-label=".form-select-lg example">
            <option selected>Pilih Program yang akan di donasi</option>
            <option value="1">Modal Usaha</option>
            <option value="2">Biaya Hidup</option>
            <option value="3">Biaya Pendidikan</option>
          </select>
          
          <select class="form-select form-select-sm" aria-label=".form-select-sm example">
            <option selected>Pilih Orang yang akan di donasi</option>
              <option value="1">Orang 1</option>
              <option value="2">Orang 2</option>
              <option value="3">Orang 3</option>
          </select>
          <div class="mb-3"><div class="mb-3">
            <label for="formFile" class="form-label">Bukti Pembayaran</label>
            <b><br>No. Rekening : 32144123XXXXXXXX (BANK A)<br>No. Rekening : 32413412XXXXXXXX (BANK B)</b>
            <input class="form-control" type="file" id="formFile" name="bukti_donasi">
            <?$bukti_donasi = $_POST["bukti_donasi"];?>
          </div>
         </div>
        <div class="col-12">
          <button type="submit" class="btn btn-primary">Submit</button>
        </div>
      </form>
    <!-- end card -->
@endsection