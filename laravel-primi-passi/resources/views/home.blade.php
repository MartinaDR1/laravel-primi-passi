<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />

    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">

    <title>Laravel</title>

    <style>
        body{
            font-family: 'Figtree', sans-serif !important;
            background: #ededed;
        }

        .card{
            width: 30rem;
            margin:auto
        }
        button{
            width: 10rem
        }
    </style>
</head>
<body>
    <header>
        <nav class="navbar navbar-expand navbar-light bg-dark ">
            <div class="container">
                <div class="nav navbar-nav">
                    <a class="nav-item nav-link active text-light" href="{{route('home')}}">Home </a>
                    <a class="nav-item nav-link text-light" href="{{route('about')}}">ToDo-List</a>
                </div>
            </div>
        </nav>
    </header>
    <main>
        <div class="container">
            <h1 class="text-center my-5">Hello World!</h1>

            <div class="card shadow align-items-center py-5">
                <h4>{{$home_title}}</h4>
                <button class="btn btn-dark mt-5"><a href="/about" class="text-decoration-none text-light">Entra</a></button>
            </div>
        </div>
    </main>
</body>
</html>