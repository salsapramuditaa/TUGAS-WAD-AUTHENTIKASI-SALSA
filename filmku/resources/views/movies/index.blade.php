<!DOCTYPE html>
<html>
<head>
    <title>Daftar Film</title>
    <style>
        table {
            width: 80%;
            border-collapse: collapse;
            margin: 20px auto;
        }
        th, td {
            border: 1px solid #999;
            padding: 10px;
            text-align: left;
        }
        th {
            background: #eee;
        }
    </style>
</head>
<body>
    <h1 style="text-align: center;">Daftar Film</h1>
    <table>
        <thead>
            <tr>
                <th>Judul</th>
                <th>Sutradara</th>
                <th>Tahun</th>
                <th>Deskripsi</th>
            </tr>
        </thead>
        <tbody>
            @forelse ($movies as $movie)
                <tr>
                    <td>{{ $movie->title }}</td>
                    <td>{{ $movie->director }}</td>
                    <td>{{ $movie->year }}</td>
                    <td>{{ $movie->description }}</td>
                </tr>
            @empty
                <tr>
                    <td colspan="4" style="text-align: center;">Tidak ada data film.</td>
                </tr>
            @endforelse
        </tbody>
    </table>
</body>
</html>
