<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserModel extends Model
{
    use HasFactory;

    protected $table = 'user';

    protected $fillable = ['Nama', 'Npm', 'kelas_id'];

    public function kelas()
    {
        return $this->belongsTo(Kelas::class, 'kelas_id');
    }

    public function getUsers()
    {
        return $this->newQuery()
            ->join('kelas', 'user.kelas_id', '=', 'kelas.id')
            ->select('user.*', 'kelas.nama_kelas')
            ->orderBy('user.id')
            ->get();
    }
}
