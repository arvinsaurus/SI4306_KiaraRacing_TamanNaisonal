<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=IBM+Plex+Sans:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;1,100;1,200;1,300;1,400;1,500;1,600;1,700&display=swap" rel="stylesheet">
    <title>Taman Nasional Ujung Kulon</title>
    <link rel="icon" href="img/Icon.png">
  </head>
  <body>

    <div class="row d-flex align-items-center vh-100">
        <div class="bookingimg position-relative">
            <br>
        </div>
        <div class="navbar position-absolute top-0">
            <a class="top-0 mt-4 ms-5 position-absolute" href="/">
                <img src="img/Logo.png" alt="Logo" height="32px">
            </a>
        </div>

        <div class="col">
            <div class="container p-5 ms-5">
                <h3>Pesan Tiket</h3>
                <p>Pesan tiket dan rasakan petualangan di <br>Taman Nasional Ujung Kulon</p>
                <div class="col w-50">
                    <div class="form-group">
                        <form action="#" method="POST">
                            <label for="date" class="mb-2">Pilih Tanggal</label>
                            <input type="date" name="date" class="form-control">
                            <br>
                            <p class="fw-bolder">Jumlah Tiket</p>
                            <div class="col mb-4">
                                <div class="row d-flex align-items-center">
                                    <div class="col-9">
                                        <p class="m-0 fw-bolder">Dewasa (8> Tahun)</p>
                                        <p class="m-0">Rp. 250.000</p>
                                    </div>
                                    <div class="col-3">
                                        <input type="number" class="count text-center w-100" name="qty" value="1">
                                    </div>
                                </div>
                            </div>
                            <div class="col mb-4">
                                <div class="row d-flex align-items-center">
                                    <div class="col-9">
                                        <p class="m-0 fw-bolder">Anak-anak (<8 Tahun)</p>
                                        <p class="m-0">Rp. 150.000</p>
                                    </div>
                                    <div class="col-3">
                                        <input type="number" class="count text-center w-100" name="qty" value="1">
                                    </div>
                                </div>
                            </div>
                            <hr class="w-100">
                            <div class="col mb-3">
                                <div class="row d-flex">
                                    <div class="col">
                                        <p>Total</p>
                                    </div>
                                    <div class="col">
                                        <p class="fw-bolder text-end">400.000</p>
                                    </div>
                                </div>
                            </div>
                            <button class="btn btn-primary px-4 py-2 w-100">
                                Pesan Tiket
                            </button>
                        </form>
                </div>
                </div>
            </div>
        </div>
    </div>

    

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
    -->
  </body>
</html>
