<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.
    0">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" 
    rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>Praktikum 5</title>
</head>
<body>

<div class="container-fluid">
    <div class="row flex-nowrap">
        <div class="col-auto col-md-3 col-x1-2 px-sm-2 px-0 bd-dark">
            <div class="d-flex flex-column align-items-center align-items-sm start px-3 pt-2 text-white min-vh-100">
                <div class="header">
                    <p class="navbar-brand fs-2">Atma Revolution</p>
                    </div>
                    <ul class="nav nav-pills flex-column mb-sm-auto mb-0 align-items-center align-items-sm-start"id="menu">
                        <li class="nav-item">
                            <a href="{{url('departemen')}}" class="nav-link align-middle px-0">
                                <i class="fs-4 bi-house"></i> <span class="ms-1 d-none d-sm-inline text-light">Departemen</span>
                            </a>
                        </li>
                        <li>
                        <a href="{{url('pegawai')}}" class="nav-link align-middle">
                            <i class="fs-4 bi-people"></i> <span class="ms-1 d-none d-sm-inline text-light">Pegawai</span>
                        </li>
                        </a>
                    </ul>
                    <hr>
            </div>
            <div class="col py-3">
                <nav class="navbar navbar-light bg-light justify-content-end border-bottom">
                    <a class="navbar-brand">170709406</a>
                </nav>
                <div class="container-fluid">
                    @yield('content')
                </div>
            </div>
        </div>
    </div>

</body>   
</html>     