<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class kp extends Model
{
    protected $table = 'kerjapraktek';
    protected $fillable = ['id', 'nim', 'nama_mahasiswa', 'judul_kp', 'tempat_penelitian', 'alamat'];

    //Field yang diabaikan isiannya
    protected $guarded = [];

    public function prodi()
    {
        return $this->hasOne('App\Prodi', 'kode_prodi', 'prodi');
    }

}


