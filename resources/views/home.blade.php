@include('partials.navi')

<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>WELCOME TO MY BIODATAE</title> 
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
 
        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

        <!-- Styles -->
        <link href="{{ asset('css/style.css') }}" rel="stylesheet">
        <link rel="stylesheet" href="bootstrap-5.0.0-dist/css/bootstrap.min.css" >

</head>
<body>

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