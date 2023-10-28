<!DOCTYPE html>
<html>
    <head>
        <title>Prueba</title>
    </head>
    <body>
        <div class="container">
            <table class="table table-bordered data-table">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Title</th>
                        <th>Synopsis</th>
                        <th>Year</th>
                        <th>Cover</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($movies as $movies)
                    <tr data-id="{{ $movie->id}}">
                        <td></td>
                    </tr>
                </tbody>
            </table>
        </div>
    </body>
</html>
