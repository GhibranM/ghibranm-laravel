<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>WELCOME TO MY BIODATAE</title> 

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

        <!-- Styles -->
        <link href="{{ asset('css/style3.css') }}" rel="stylesheet">

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

    <section class="komentar" id="komentar">
        <script src="js/jquery-3.6.0.min.js"></script>
    <div class="hero">

        <h1>KOMENTAR</h1>
        <br>
        Komentar dan saran anda sangat kami butuhkan<br>
        untuk meningkatkan kualitas situs kami
        <br>
        <hr>
        <pre>
            Nama Anda   : <input type="text" name="nama" size="25" maxlength="50">
            Email Anda  : <input type="text" name="nama" size="25" maxlength="50">
            Komentar    : <textarea name="Komentar" cols="50" rows="5"></textarea>
        </pre>
        <input type="submit" value="Kirim">
        <input type="reset" value="batal">
 
    </div>
</section>
</body>
</html>