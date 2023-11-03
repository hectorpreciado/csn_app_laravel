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
    <title>Agregar registro</title>
</head>
<body>
    <div class="card">
        <h5 class="card-header">Editar registros</h5>
        <div class="card-body">
            <h5 class="card-title">Editar</h5>
            <p class="card-text">
                <form action="{{route('movie.update',$movies->id)}}" method="POST">
                    @csrf
                    @method("PUT")
                    <label for="">Titulo</label>
                    <input type="text" name="title" class="form-control" required value="{{$movies->title}}">
                    <label for="">Sinopsis</label>
                    <input type="text" name="synopsis" class="form-control" required value="{{$movies->synopsis}}">
                    <label for="">Year</label>
                    <input type="integer" name="year" class="form-control" required value="{{$movies->year}}">
                    <label for="">Cover</label>
                    <input type="text" name="cover" class="form-control" required value="{{$movies->cover}}">
                    <br>
                    <button class="btn btn-primary">Editar</button>
                    <a href="{{ route("movie.lista")}}">Regresar</a>
                </form>
            </p>
        </div>
    </div>
</body>
</html>
