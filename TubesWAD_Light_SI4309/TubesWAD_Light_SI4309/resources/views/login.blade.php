<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <!-- Link Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <link rel="stylesheet" href="/login.css">
    <title>Tubes Light</title>
</head>
<body>
    <!-- <div class="header">
        <div class="container">
            <h5 class="text-center">Silahkan Login Terlebih Dahulu</h5>
        </div>
    </div> -->
    <div>
    <div class="container login">
        <div class="row d-flex justify-content-center">
            <div class="col">
                <p id="buka">Silahkan Login Terlebih Dahulu</p>
                <!-- <p class="text-center mt-2"><img src="foto/logomelon-lpg.png" width= "52px">MELON.LPG<p> -->
                <p id="login" class="text-center mt-4">LOGIN</p>
                <form class="m-4" action="home" method="POST">
                    @csrf
                    <div class="mb-3">
                      <label for="nohp" class="form-label">No Handphone</label>
                      <input type="text" class="form-control" id="nohp" name="nohp" aria-describedby="emailHelp" autofocus required>
                    </div>
                    <div class="mb-3">
                      <label for="password" class="form-label">Password</label>
                      <input type="password" name="password" class="form-control" id="password" required>
                    </div>
                    <div class="tombol d-grid">
                        <button type="submit" class="btn fw-bold">Login</button>
                    </div>
                </form>
            </div>
            <div class="col logo">
                <div class="">
                    <div class="lingkaran">
                        <img src="foto/logomelon-lpg.png" width= "350px" class="m-4">
                    </div>
                </div>
                {{-- <p><img src="foto/logomelon-lpg.png" width="82px">MELON.LPG<p> --}}
            </div>
        </div>
    </div>
</body>
</html>