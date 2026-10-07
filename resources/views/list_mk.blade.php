<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar Mata Kuliah</title>
</head>
<body>

    <div class="container">
        <h1>Daftar Mata Kuliah</h1>

        <a href="{{ route('matakuliah.create') }}">
            Tambah Mata Kuliah
        </a>

        <br><br>

        <table border="1" cellpadding="10">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Nama Mata Kuliah</th>
                    <th>SKS</th>
                </tr>
            </thead>

            <tbody>
                @foreach ($mataKuliah as $mk)
                    <tr>
                        <td>{{ $mk->id }}</td>
                        <td>{{ $mk->nama_mk }}</td>
                        <td>{{ $mk->sks }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>

</body>
</html>