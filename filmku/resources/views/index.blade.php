<!-- resources/views/movies/index.blade.php -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Movies List</title>
</head>
<body>
    <h1>Movies List</h1>
    <table>
        <thead>
            <tr>
                <th>Title</th>
                <th>Director</th>
                <th>Year</th>
                <th>Description</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($movies as $movie)
                <tr>
                    <td>{{ $movie->title }}</td>
                    <td>{{ $movie->director }}</td>
                    <td>{{ $movie->year }}</td>
                    <td>{{ $movie->description }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
</body>
</html>
