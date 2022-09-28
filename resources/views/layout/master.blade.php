<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>@yield('title') | BEM FTM UPN YK</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.2.0/css/bootstrap.min.css" />
    <link rel="stylesheet" href="{{ asset('src/css/style.css') }}" />
    <script src="{{asset('assets/js/jquery.min.js')}}"></script>
    <style>
        .navbar {
            background-color: #f12b2f;
        }

        .navbar-nav .nav-link,
        .navbar-nav .show>.nav-link {
            color: white !important;
            font-size: 0.875rem;
            font-weight: 500;
            letter-spacing: 0.03em;
        }

        .nav-link:focus {
            font-weight: 700;
        }

        #aspiration {
            padding: 5rem 0;
        }

        .title {
            font-size: 2.8rem;
            font-weight: 700;
        }

        .form-control {
            border-radius: 12px;
            border: 1.5px solid #ced4da;
            box-shadow: none !important;
            font-size: 0.875rem;
        }

        label,
        input {
            font-size: 0.875rem;
        }

        .btn-sent {
            padding: 0.75rem 3rem;
            background-color: #f12b2f;
            border-radius: 12px;
        }

        .btn-sent:hover {
            background-color: #cf090d;
        }

        .form-control:focus {
            border: 1.5px solid #ced4da;
        }

        .form {
            width: 100%;
            max-width: 40rem;
        }
    </style>
</head>

<body>
    <!-- navbar -->
    <nav class="navbar navbar-expand-lg sticky-top">
        <div class="container">
            <a class="navbar-brand" href="#">
                <img src="/src/img/logo.svg" width="40" alt="" />
            </a>
            <button class="navbar-toggler shadow-none border-0" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarTogglerDemo03" aria-controls="navbarTogglerDemo03" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarTogglerDemo03">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item pe-2">
                        <a class="nav-link" href="{{route('message.create')}}">KOTAK MAFIA </a>
                    </li>
                    <li class="nav-item pe-2">
                        <a class="nav-link" href="{{route('library.index')}}">E-PERPUSTAKAAN</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <!-- end navbar -->

    <!-- content -->
    <section class="container">
        @yield('content')
    </section>
    <!-- end content -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous">
    </script>
</body>

</html>
