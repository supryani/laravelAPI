<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pengumuman extends Model
{
    protected $table='pengumuman';

    protected $fillable=
    [
       'id','judul','isi','users_id','kategori_pengumuman_id'
    ];
    public function kategoripengumumans(){
        return $this->belongsTo( \App\Models\KategoriPengumuman::class,  'kategori_pengumuman_id','id');
    }
    public function user(){
        return $this->belongsTo( \App\Models\user::class,  'users_id','id' );
    }
}
