<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>NeuLibrary</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Caveat">
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <link rel="stylesheet" href="{{ asset('style.css') }}">
</head>

<body class="bg-cPucat overflow-x-hidden">
    <header class="w-full h-10dvh bg-cTua px-3 d-flex align-items-center sticky-top">
        <p class="text-bold text-white fs-2 m-0 font-caveat">NeuLibrary</p>
    </header>
    <div class="container-fluid pt-3">
        <div class="row">
            <div class="col-md-3 col-lg-2">
                {{ $dashboard ?? null }}
            </div>
            <main class="col-md-9 ml-sm-auto col-lg-10 px-md-4">
                @if ($errors->any())
                    <div class="alert alert-danger position-absolute m-0 slide-in z-3">
                        <ul class="m-0">
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif
                {{ $slot }}
            </main>
        </div>
    </div>
</body>

</html>
