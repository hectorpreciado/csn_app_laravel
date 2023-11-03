<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet"
            href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css"
            integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm"
            crossorigin="anonymous">
    <title>Eliminar</title>
</head>
<body>
    <div class="card">
        <h5 class="card-header">
            <div class="card-body">

                <p class="card-text">
                    <div class="alert alert-danget" role="alert">
                        Estas seguro de eliminar este registro

                        <table class="table table-sm table-hover table-bordered">
                            <thead>
                                <th>Titulo</th>
                                <th>Sinopsis</th>
                                <th>Año</th>
                                <th>Cover</th>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>{{ $movies -> title}}</td>
                                    <td>{{ $movies -> synopsis}}</td>
                                    <td>{{ $movies -> year}}</td>
                                    <td>{{ $movies -> cover}}</td>
                                </tr>
                            </tbody>
                        </table>
                        <hr>
                        <form action="{{route('movie.delete', $movies->id)}}" method="POST">
                           @csrf
                           @method('DELETE')
                            <a href="{{ route("movie.lista")}}" class="btn btn-info">
                            Regresar
                        </a>
                        <button class="btn btn-danger">Eliminar</button>
                        </form>
                    </div>
                </p>
            </div>
        </h5>
    </div>
    </div>
</body>
</html>
