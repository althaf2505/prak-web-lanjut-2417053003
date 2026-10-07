<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Kelas;
use App\Models\UserModel;

class UserController extends Controller
{
    public function create()
    {
        $kelas = Kelas::all();

        $title = 'Buat Pengguna Baru';

        return view('create_user', compact('kelas', 'title'));
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'nama' => ['required', 'string', 'max:100'],
            'npm' => ['required', 'string', 'max:30'],
            'kelas_id' => ['required', 'exists:kelas,id'],
        ]);

        UserModel::create([
            'Nama' => $validated['nama'],
            'Npm' => $validated['npm'],
            'kelas_id' => $validated['kelas_id'],
        ]);

        return to_route('user.index')->with('success', 'Data pengguna berhasil ditambahkan.');
    }

    public function index()
    {
        $users = UserModel::join(
            'kelas',
            'user.kelas_id',
            '=',
            'kelas.id'
        )
        ->select(
            'user.id',
            'user.Nama as nama',
            'user.Npm as npm',
            'kelas.nama_kelas'
        )
        ->orderBy('user.Nama')
        ->get();

        $title = 'Daftar Pengguna';

        return view('list_user', compact('users', 'title'));
    }
}
