<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title> </title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/homeapp.css') }}">
    <link rel="stylesheet"
        href="https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@5.15.4/css/fontawesome.min.css"
        integrity="sha384-jLKHWM3JRmfMU0A5x5AkjWkw/EYfGUAGagvnfryNV3F9VqM98XiIH7VBGVoxVSc7" crossorigin="anonymous">


    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css"
        integrity="sha384-tKLJeE1ALTUwtXlaGjJYM3sejfssWdAaWR2s97axw4xkiAdMzQjtOjgcyw0Y50KU" crossorigin="anonymous">

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-U1DAWAznBHeqEIlVSCgzq+c9gqGAJn5c/t99JyeKa9xxaYpSvHU5awsuZVVFIhvj" crossorigin="anonymous">
    </script>

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js"
        integrity="sha384-W8fXfP3gkOKtndU4JGtKDvXbO53Wy8SZCQHczT5FMiiqmQfUpWbYdTil/SxwZgAN" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.min.js"
        integrity="sha384-skAcpIdS7UcVUC05LJ9Dxay8AXcDYfBJqt1CJ85S/CFujBsIzCIv+l9liuYLaMQ/" crossorigin="anonymous">
    </script>

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">

    <meta name="Googlebot" content="noindex, nofollow" />
    <meta name="robots" content="noindex, nofollow" />



</head>
<style>
    .xyl {
        margin-left: auto;
    }

</style>

<body>

    <nav class="navbar navbar-expand-lg bg-primary  navbar-dark fixed-top">
        <div class="container">
            <a href="" class="navbar-brand">JJ Services</a>

            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navmenu">

                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navmenu">
                <ul class="navbar-nav ms-auto ">
                    <li class="nav-item">
                        <a href="/admin-homepage" class="nav-link">Home</a>
                    </li>



                    <li class="nav-item">
                        <a href="/create" class="nav-link">Create Post</a>
                    </li>

                    <li class="nav-item">
                        <a href="/createCategory" class="nav-link">Create category</a>
                    </li>



                    <li class="nav-item">
                        <a href="/blog" class="nav-link">Blog</a>
                    </li>









                </ul>
            </div>
        </div>

        {{-- <form action="{{ url('/search-record') }}" method="post" class="pr-4">
            {{ csrf_field() }}
            <input type="text" class="form-control" name="name" />
            <input type="submit" class="btn btn-default" value="Search" />

        </form> --}}






    </nav>






    <div class="content-wrapper p-1">
        @yield('content')
    </div>




    <footer class="main-footer p-4" id="footer">
        <strong>Copyright &copy; 2021 <a href="">FecytechhSolns</a>.</strong>
        All rights reserved.
    </footer>




</body>

</html>
