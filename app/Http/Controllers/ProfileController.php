<?php

namespace App\Http\Controllers;

class ProfileController extends Controller
{
    public function profile($nama, $npm, $kelas)
    {
        $data = [
            'nama' => $nama,
            'kelas' => $kelas,
            'npm' => $npm
        ];

        return view('profile', $data);
    }
}