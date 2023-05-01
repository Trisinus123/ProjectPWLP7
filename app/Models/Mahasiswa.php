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
        'Jurusan',
        'No_Handphone',
        'Email',
        'Tanggal_Lahir',
        'kelas_id',
    ];

    public function kelas(){
        return $this->belongsTo(Kelas::class);
    }
}