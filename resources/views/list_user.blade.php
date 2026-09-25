@extends('layouts.app')

@section('content')

    <h1>Daftar Pengguna</h1>

    @if (session('success'))
        <p>{{ session('success') }}</p>
    @endif

    <table>

        <thead>
            <tr>
                <th>ID</th>
                <th>Nama</th>
                <th>NPM</th>
                <th>Kelas</th>
            </tr>
        </thead>

        <tbody>

            @forelse ($users as $user)

                <tr>
                    <td>{{ $user->id }}</td>
                    <td>{{ $user->Nama }}</td>
                    <td>{{ $user->Npm }}</td>
                    <td>{{ $user->nama_kelas }}</td>
                </tr>

            @empty
                <tr>
                    <td colspan="4">Belum ada data pengguna.</td>
                </tr>
            @endforelse

        </tbody>

    </table>

@endsection
