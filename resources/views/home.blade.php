<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    @vite('resources/sass/app.scss')
    @vite('resources/css/app.css')
</head>
<body>
    <!--Navbar-->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark py-3">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">Navbar</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
            <div class="navbar-nav">
                <a class="nav-link active" aria-current="page" href="/">Home</a>
                <a class="nav-link" href="{{route('barangs.index') }}">Data Barang</a>
            </div>
            </div>
        </div>
    </nav>

    <div class="container py-5">
        <div class="row text-center">
            <div class="col-lg-12">
                <h3>Biodata Mahasiswa</h3>
                <img class="img-thumbnail" src="{{Vite::asset('resources/images/Aan.jpg') }}" alt="image">
                <p class="mt-3">Nama: Achmad Farchan </p>
                <p>Prodi: Sistem Informasi (2020)</p>
            </div>
        </div>
    </div>

    @vite('resources/js/app.js')
</body>
</html>