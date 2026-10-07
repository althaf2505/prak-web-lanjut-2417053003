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

        {{-- Notifikasi sukses --}}
        @if (session('success'))
            <p style="color: green;">
                {{ session('success') }}
            </p>
        @endif

        <table border="1" cellpadding="10">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Nama Mata Kuliah</th>
                    <th>SKS</th>
                    <th>Aksi</th>
                </tr>
            </thead>

            <tbody>
                @foreach ($mataKuliah as $mk)
                    <tr>
                        <td>{{ $mk->id }}</td>
                        <td>{{ $mk->nama_mk }}</td>
                        <td>{{ $mk->sks }}</td>

                        <td>
                            {{-- Tombol Edit --}}
                            <a href="{{ route('matakuliah.edit', $mk->id) }}">
                                Edit
                            </a>

                            |

                            {{-- Tombol Hapus --}}
                            <form action="{{ route('matakuliah.destroy', $mk->id) }}"
                                  method="POST"
                                  style="display: inline;">

                                @csrf
                                @method('DELETE')

                                <button type="submit"
                                        onclick="return confirm('Yakin ingin menghapus data ini?')">
                                    Hapus
                                </button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>

</body>
</html>