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
        <link href="{{ asset('css/style3.css') }}" rel="stylesheet">

</head>
<body> 

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