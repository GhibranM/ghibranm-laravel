<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>WELCOME TO MY BIODATAE</title> 

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

        <!-- Styles -->
        <link href="{{ asset('css/style.css') }}" rel="stylesheet">
        <link rel="stylesheet" href="bootstrap-5.0.0-dist/css/bootstrap.min.css" >

</head>
<body>

    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <a class="navbar-brand" href="#">Ghibran Muhammad</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
          <ul class="navbar-nav navbar-right">
            <li class="nav-item active">
              <a class="nav-link" href="/home">Home <span class="sr-only"></span></a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="/biodata" herf="biodata.blade.php">Biodata</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="/komentar">Komentar</a>
            </li>
          </ul>
        </div>
      </nav>
    <section class="Home" id="home">

    

<script src="js/jquery-3.6.0.min.js"></script>
    <div class="hero">

        <div class="logo">
            <img src="{{ asset('img/logo2.png') }}">
        </div>

        <div class="sidebar">
            <div class="text-box">
                <h1>MOON PROJECT</h1>
                <h4>PREMIUM QUALITY</h4>
                <div class="line"></div>
            </div>
        </div>

        <div class="content">
        <h1>SELAMAT DATANG</h1>
        <p> Dibiodata Saya "GHIRBAN MUHAMMAD"
        </p>
        <div class="btn" id="playBtn">
            <img src="{{ asset('img/play.png') }}" id="icon">Watch Video
        </div>
        </div>

    </div>
</section>
</body>
</html>