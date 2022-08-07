<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500&display=swap" rel="stylesheet">

    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/style.css') }}">

    <title>Simulasi Rakitan OneIT</title>
</head>

<body>

    <nav class="navbar navbar-expand-lg navbar-light bg-light border-bottom navbar-custom">
        <div class="container">
            <a class="navbar-brand" href="{{ url('/') }}">
            <img class="brand" src="{{ asset('assets/images/oneit.png') }}" alt="One It Solution logo" width="50" height="50"></a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link" aria-current="page" href="#">Produk</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" aria-current="page" href="#">Mining Rig</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button"
                            data-bs-toggle="dropdown" aria-expanded="false">
                            Marketplace
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                            <li><a class="dropdown-item" href="#">Tokopedia</a></li>
                            <li><a class="dropdown-item" href="#">Shopee</a></li>
                            <li><a class="dropdown-item" href="#">Lazada</a></li>
                            <li><a class="dropdown-item" href="#">Bukalapak</a></li>
                        </ul>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active-custom" href="#">Simulasi Rakitan</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Official Store</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Youtube</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    @yield('content')

    <footer class="footer">
        <div class="container">
            <div>
                <p class="text-center">One IT Solution © 2021</p>
            </div>
        </div>
    </footer>
    <script  src="{{ asset('assets/js/script.js') }}" type="text/javascript"></script>
</body>

</html>