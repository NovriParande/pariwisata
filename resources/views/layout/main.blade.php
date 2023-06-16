<!doctype html>
    <html lang="en">
    <head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="css/style.css">
        <!-- Bootstrap CSS -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
        
        

        <title>Wonderfull Toraja</title>
    </head>
    <body>
        <nav class="navbar navbar-expand-lg navbar-dark mt-5px rounded" style="background-color: #0b0d52;" >
            <div class="container-fluid">
                <a class="navbar-brand" href="#">
                    <img src="img/pesonaindonesia.png" alt="" width="50px" height="10%">
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="{{ url('/home') }}">Home</a>
                    </li>
                    <li class="nav-item">
                    <a class="nav-link" href="{{ url('/tourism') }}">Destinasi</a>
                    </li>
                    <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        Tentang Toraja
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <li><a class="dropdown-item" href="">Informasi praktis</a></li>
                        <li><a class="dropdown-item" href="">Galeri</a></li>
                    </ul>
                    </li>
                    <li class="nav-item">
                    <a class="nav-link" href="">Tentang kami</a>
                    </li>
                </ul>
                <form class="d-flex">
                    <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                    <button class="btn btn-outline-success" type="submit">Search</button>
                </form>
                </div>
            </div>
            
        </nav>
    
    <!--extend layout-->
    <div>@yield('mainlayout')</div>

    <div class="footer1 d-flex justify-content-center">
        <div class="kampus1 d-flex justify-content-center">
            <center>
                <p>Kelompok keliling Eropa<br>
                    Novrianto Parande <br>
                    Yabes Orville<br>
                    Zeth Ricard Patabang<br>
                    Kode Pos: 91817 Makale Utara, Tana Toraja Sulawesi Selatan, Indonesia<br>
                </p>
            </center>
        </div>
        
    </div>
    <footer class="d-flex">
            ©2023 Universitas Kristen Indonesia Toraja
    </footer>

        <!-- Optional JavaScript; choose one of the two! -->

        <!-- Option 1: Bootstrap Bundle with Popper -->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    </body>
    </html>