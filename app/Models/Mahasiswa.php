<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\Mahasiswa as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\Model;
use App\Models\Kelas;

class Mahasiswa extends Model
{ 
    protected $table = "mahasiswas";
    public $timestamps = false;
    protected $primaryKey = 'Nim';

    protected $fillable = [
        'Nim',
        'Nama',
        'foto',
        'Jurusan',
        'No_Handphone',
        'Email',
        'Tanggal_Lahir',
        'kelas_id',
    ];

    public function kelas(){
        return $this->belongsTo(Kelas::class);
    }

    public function mataKuliah() {
        return $this->belongsToMany(MataKuliah::class, "mahasiswa_matakuliah", "mahasiswa_id", "matakuliah_id")->withPivot('nilai');
    }
}



