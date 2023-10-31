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
            <div class="container">
                <div class="row">
                    <div class="col-sm-12">
                    <div class="table table-responsive">
                        <table class="table table-hover table-bordered">
                            <tr>
                                <th>Película</th>
                                <th>Synopsis</th>
                                <th>Año</th>
                                <th>Cover</th>
                            </tr>
                            @foreach($movies as $movie)
                                <tr>
                                    <td>{{$movie -> title}}</td>
                                    <td>{{$movie -> synopsis}}</td>
                                    <td>{{$movie -> year}}</td>
                                    <td>{{$movie -> cover}}</td>
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
