<!doctype html>
    <html lang="en">
        <head>
            <meta charset="utf-8">
            <meta name="viewport" content="width=device-width, initial-scale=1, shrink-tofit=no">
            <link rel="stylesheet"
            href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css"
            integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm"
            crossorigin="anonymous">
            <title>Datos de base de datos</title>
        </head>
        <body>
            <br>
            <div class="title">
                <h2>Catálogo de películas</h2>
            </div>
            <header>
                <nav class="navbar navbar-expand-lg bg-body-tertiary">
                    <div class="container-fluid">
                      <a class="navbar-brand" href="#">Navbar</a>
                      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                      </button>
                      <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                          <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="#">Home</a>
                          </li>
                          <li class="nav-item">
                            <a class="nav-link" href="#">Link</a>
                          </li>
                          <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                              Dropdown
                            </a>
                            <ul class="dropdown-menu">
                              <li><a class="dropdown-item" href="#">Action</a></li>
                              <li><a class="dropdown-item" href="#">Another action</a></li>
                              <li><hr class="dropdown-divider"></li>
                              <li><a class="dropdown-item" href="#">Something else here</a></li>
                            </ul>
                          </li>
                          <li class="nav-item">
                            <a class="nav-link disabled" aria-disabled="true">Disabled</a>
                          </li>
                        </ul>
                        <form class="d-flex" role="search">
                          <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                          <button class="btn btn-outline-success" type="submit">Search</button>
                        </form>
                      </div>
                    </div>
                  </nav>
            </header>
            <div class="container">
                <a href="{{ route("movie.create") }}" class="btn btn-primary">Agregar Película</a>
                <div class="row">
                    <div class="col-sm-12">
                    <div class="table table-responsive">
                        <table class="table table-hover table-bordered">
                            <tr>
                                <th>Película</th>
                                <th>Synopsis</th>
                                <th>Año</th>
                                <th>Cover</th>
                                <th>Editar</th>
                                <th>Eliminar</th>
                            </tr>
                            @foreach($peliculas as $pelicula)
                                <tr>
                                    <td>{{$pelicula -> title}}</td>
                                    <td>{{$pelicula -> synopsis}}</td>
                                    <td>{{$pelicula -> year}}</td>
                                    <td>{{$pelicula -> cover}}</td>
                                    <td>
                                        <form action="{{route("movie.actualizar", $pelicula-> id)}}" method="GET">
                                            <button class="btn btn-warning btn-sn">Editar</button>
                                        </form>
                                    </td>
                                    <td>
                                        <form action="{{route("movie.show", $pelicula-> id)}}" method="GET">
                                            <button class="btn btn-danger btn-sn">Eliminar</button>
                                        </form>
                                    </td>
                                </tr>
                            @endforeach
                        </table>
                    </div>
                </div>
            </div>
            </div>
            <script
            src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3"
            crossorigin="anonymous"></script>
        </body>
    </html>
