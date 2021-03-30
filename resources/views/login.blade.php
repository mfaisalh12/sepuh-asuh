</html>
<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="google-signin-scope" content="profile email">
    <meta name="google-signin-client_id" content="812326108738-3gai9ijo1tksor0f74hgv1vope8q8fqb.apps.googleusercontent.com">
    <!-- script API -->
    <script src="https://apis.google.com/js/platform.js" async defer></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
    <!-- bootstap icon -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.0/font/bootstrap-icons.css">
    <!-- link css -->
    <link rel="stylesheet" href="login.css">
    <title>Login</title>
</head>

<body>

    <!-- start navbar -->

    <nav class="navbar-fluid navbar-expand-lg navbar-light bg-light  ">
        <div class="container-fluid">
            <a href="/">
                <i class="bi bi-arrow-left-square-fill" style="font-size: 40px; color: #1993C8;"></i></a>
            <a class="navbar-brand position-absolute  start-50 translate-middle" style="font-family:poppins, sans-serif;font-size:30px; color:#107EAD; margin-top: 20px;"><b>ASUH SEPUH</b></a>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
            </div>


    </nav>
    <!-- fiugre -->

    <div class="container-fluid mt-5" style="background-color: #1993C8; width: 651px; height: 700px; border-radius: 12px;">
        <h1 class="text-center" style="font-family: poppins, sans-serif; font-family: 30px; color: white;"><b>Selamat Datang</b></h1>
        <p class=" text-center" style="font-family: poppins, sans-serif; font-family: 20px; color: white;">Bergabung Bersama Kami <br> Membantu Meringankan Beban Sesama <br> Bersama Asuh Sepuh </p>
        <div class="card" style="width: 408px; height: 431px; margin-left: 110px; border-radius: 12px; background-color: F6F6F6;">
            <div class="card-body">
                <p class=" text-center" style="font-family: poppins, sans-serif; font-size: 15px;">Untuk bergabung bersama kami, <br> silahkan masuk dengan akun anda </p>
                <div class="card-body" style="background-color: #E1E1E1; border-radius: 12px; ">

                    <i class="bi bi-envelope" style="font-size: 35px;"></i><label for="exampleInputEmail1" style="margin-left: 10px; font-family: poppins, sans-serif; font-size: 15px">Masukan Email</label>
                    <input type="email " style="background-color:#E1E1E1; border-color: #E1E1E1;" class="form-control " id="exampleInputEmail1 " aria-describedby="emailHelp " placeholder="Enter email ">
                </div>
                <div class="card-body" style="background-color: #fff; border-radius: 12px; ">

                    <i class="bi bi-lock-fill" style="font-size: 35px;"></i><label for="exampleInputEmail1" style="margin-left: 10px; font-family: poppins, sans-serif; font-size: 15px">password</label>
                    <input type="password" style="background-color:#fff; border-color: #fff;" class="form-control " id="exampleInputPassword1" placeholder="Enter password ">
                </div>
                <div class="d-grid gap-2">
                    <button class="btn " style="color: #fff; background-color: #1993C8; border-radius: 8px; font-family: poppins,sans-serif; font-size: 12px; " type="button"><b>Masuk</b></button>
                    <button class="btn" style="background-color: #fff; color: black; font-family: poppins,sans-serif; font-size: 12px;" type="button"><b>Buat AKun</b></button>
                </div>
                <div class="g-signin2 mt-2" data-onsuccess="onSignIn " data-theme="dark" style="margin-left: 120px;"></div>
                <script>
                    function onSignIn(googleUser) {
                        // Useful data for your client-side scripts:
                        var profile = googleUser.getBasicProfile();
                        console.log("ID: " + profile.getId()); // Don't send this directly to your server!
                        console.log('Full Name: ' + profile.getName());
                        console.log('Given Name: ' + profile.getGivenName());
                        console.log('Family Name: ' + profile.getFamilyName());
                        console.log("Image URL: " + profile.getImageUrl());
                        console.log("Email: " + profile.getEmail());

                        // The ID token you need to pass to your backend:
                        var id_token = googleUser.getAuthResponse().id_token;
                        console.log("ID Token: " + id_token);
                    }
                </script>
            </div>
        </div>

    </div>
    <!-- start button google account -->

    <!-- end button google account -->

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