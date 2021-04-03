<!DOCTYPE html>
<html lang="id">
<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.0/font/bootstrap-icons.css">
    <title>Akun Baru</title>
</head>
<body>

    <nav class="navbar-fluid navbar-expand-lg navbar-light bg-light  ">
        <div class="container-fluid">
            <a href="/login">
                <i class="bi bi-arrow-left-square-fill" style="font-size: 40px; color: #1993C8;"></i></a>
            <a class="navbar-brand position-absolute  start-50 translate-middle" style="font-family:poppins, sans-serif;font-size:30px; color:#107EAD; margin-top: 20px;"><b>ASUH SEPUH</b></a>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
            </div>
    </nav>
    <h1>Halama Pembuatan Akun baru</h1>
        
    <form action="/newaccount" class="row g-3" method="POST">
    </div>
        @csrf
        <div class="col-12">
        
          <label for="inputNama" class="form-label">Nama</label>
          <input type="text" class="form-control" style="color: #fff; background-color: #1993C8; border-radius: 8px; font-size: 12px;" id="inputName" name="nama" value="{{old('nama')}}">

          @error('nama')
            <div class="alert alert-danger">{{ $message }}</div>
            @enderror
        </div>

        <div class="col-12">
          <label for="inputDonasi" class="form-label">email</label>
          <input type="text" class="form-control" id="inputemail" name="email" value="{{old('email')}}">
          <?$email = $_POST["email"];?>

          @error('email')
            <div class="alert alert-danger">{{ $message }}</div>
            @enderror
        </div>

        <div class="col-12">
          <label for="inputDonasi" class="form-label">Password</label>
          <input type="password" class="form-control" id="inputpassword" name="password" value="{{old('password')}}">
          <input type="checkbox" onclick="myFunction()">Show Password
          <?$password = $_POST["password"];?>
          @error('password')
            <div class="alert alert-danger">{{ $message }}</div>
            @enderror
        </div>
        
        

        <div class="col-12">
          <label for="inputDonasi" class="form-label">Telepon/No Hp</label>
          <input type="text" class="form-control" id="inputtelpon" name="telpon" value="{{old('telpon')}}">
          <?$telpon = $_POST["telpon"];?>
          @error('telpon')
            <div class="alert alert-danger">{{ $message }}</div>
            @enderror
        </div>
        
        
       
        <div class="col-12">
          <button type="submit" class="btn btn-primary">Submit</button>
        </div>
      </form>
      </div>


<script>
function myFunction() {
  var x = document.getElementById("inputpassword");
  if (x.type === "password") {
    x.type = "text";
  } else {
    x.type = "password";
  }
}
</script>

</body>
</html>