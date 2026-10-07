<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Mata Kuliah</title>
</head>
<body>

    <div class="container">
        <h1>Edit Mata Kuliah</h1>

        <form action="{{ route('matakuliah.update', $mataKuliah->id) }}" method="POST">
            @csrf
            @method('PUT')

            <label for="nama_mk">Nama Mata Kuliah:</label><br>
            <input
                type="text"
                id="nama_mk"
                name="nama_mk"
                value="{{ $mataKuliah->nama_mk }}"
                required
            >

            <br><br>

            <label for="sks">SKS:</label><br>
            <input
                type="number"
                id="sks"
                name="sks"
                value="{{ $mataKuliah->sks }}"
                required
            >

            <br><br>

            <button type="submit">Update</button>

            <a href="{{ route('matakuliah.index') }}">
                Batal
            </a>
        </form>
    </div>

</body>
</html>