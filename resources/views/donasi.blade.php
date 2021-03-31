<!DOCTYPE html>
<html lang="en">
<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.0/font/bootstrap-icons.css">
    <title>Donasi</title>
</head>
<body>
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
    
    <form action="/" class="row g-3" method="post">
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
        <div class="mb-3">
            <label for="formFile" class="form-label">Bukti Pembayaran</label>
            <input class="form-control" type="file" id="formFile" name="bukti_pembayaran">
            <?$bukti_donasi = $_POST["bukti_pembayaran"];?>
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
        <div class="col-12">
          <button type="submit" class="btn btn-primary">Submit</button>
        </div>
      </form>
</body>
</html>