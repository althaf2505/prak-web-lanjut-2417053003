<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Kelas;
use App\Models\UserModel;

class UserController extends Controller
{
    public $userModel;
    public $kelasModel;

    public function __construct()
    {
        $this->userModel = new UserModel();
        $this->kelasModel = new Kelas();
    }

    public function index()
    {
        $data = [
            'title' => 'List Users',
            'users' => $this->userModel->getUsers()
        ];
        return view('list_user', $data);
    }

    public function create()
    {
        return view('create_user', [
            'title' => 'Tambah Pengguna',
            'kelas' => $this->kelasModel->getKelas(),
        ]);
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'nama' => ['required', 'string', 'max:255'],
            'npm' => ['required', 'string', 'max:255'],
            'kelas_id' => ['required', 'exists:kelas,id'],
        ]);

        $this->userModel->create([
            'Nama' => $validated['nama'],
            'Npm' => $validated['npm'],
            'kelas_id' => $validated['kelas_id'],
        ]);

        return redirect()->route('user.index')->with('success', 'Pengguna berhasil ditambahkan.');
    }
}

