<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="frontend/libraries/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="frontend/styles/main.css">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:300i,400,400i,500,700,800&display=swap" rel="stylesheet">
</head>
<body>



                <div class="navbar bg-dra">
                    <div class="container">
                    <div class="col-md-4 col-sm-12 col-12">
                       <a href="" class="navbar-brand text-white">LOGO</a>
                    </div>
                    <div class="col-md-4 col-12 text-center">
                        <h2 class="my-md-3 site-title text-white">Aduan Siswa</h2>
                    </div>
                    <div class="col-md-4 col-12 text-right">
                        <p class="my-md-4 header-links">
                            <a href="#" class="px-2 text-white">Login</a>
                            <a href="#" class="px-1 text-white">Register</a>
                        </p>
                    </div>
                    </div>
                </div>


        <div class="hero">
        <div class="banner">
            <div class="left-column">
                <h1>Aduan<span>Siswa</span></h1>
                <h3>Layanan Aspirasi<span> SMK Jakarta Pusat 1</span>
                </h3>
                <p>
                  Lorem ipsum dolor sit amet, consectetur adipisicing elit,
                  sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                  Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut
                  aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate
                  velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat
                  non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                </p>

                <div class="btn">
                    <a href="{{url('/about')}}" class="button text-decoration-none">Tentang Kami</a>
                    <a href="{{('/create/laporkan')}}" class="button text-decoration-none">Kirim Laporan</a>

                </div>
            </div>
            <div class="right-column">
                <img src="frontend/images/studentbg.jpg" class="img-fluid" alt="Responsive Image">
            </div>
        </div>
    </div>


    <script src="frontend/libraries/bootstrap/js/bootstrap.min.js"></script>
</body>
</html>
