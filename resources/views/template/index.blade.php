<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
</head>

<body>
    <header>
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse justify-content-center" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link" href={{Route("home")}}>Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href={{Route('sav')}}>S.A.V</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href={{Route('partenariat')}}>Partenariat</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href={{Route('info')}}>Informations</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href={{Route('frontend')}}>Frontend </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href={{Route('backend')}}>Backend</a>
                    </li>
                </ul>
            </div>
        </nav>

    </header>
    @yield('content')
    <script src="{{ asset('js/app.js') }}"></script>
</body>

</html>
