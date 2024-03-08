<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>Arcon</title>
    <link href="https://cdn.jsdelivr.net/npm/simple-datatables@7.1.2/dist/style.min.css" rel="stylesheet" />
    <script src="https://use.fontawesome.com/releases/v6.3.0/js/all.js" crossorigin="anonymous"></script>


    {{-- Subir para o servidor
        <link rel="stylesheet" href="{{ asset('build/assets/app-XvvFJtEH.css')}}">
    --}}

    @vite(['resources/css/app.css', 'resources/js/app.js'])

</head>
<body class="sb-nav-fixed">


    {{$slot}}

    {{-- Subir para o servidor

        <script src="{{ asset('build/assets/app-BIKh7pqT.js')}}" ></script>

    --}}
    <script  src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"crossorigin="anonymous" ></script>

  </body>
</html>
