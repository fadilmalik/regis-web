<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Siswa extends Model
{
    protected $table = 'siswa';
    protected $fillable = [
        'nis', 'nama', 'temp_lahir', 'tgl_lahir', 'alamat', 'kelas', 'jurusan',
        'jns_kelamin', 'asal_sekolah'
    ];
}
