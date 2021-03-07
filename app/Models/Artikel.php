<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Artikel extends Model
{
    protected $table='artikel';

    protected $fillable=
    [
       'id','judul','isi','users_id','kategori_artikel_id'
    ];
    public function kategoriArtikel(){
        return $this->belongsTo( \App\KategoriArtikel::class,  'kategori_artikel_id', 'id');
    }
    public function user(){
        return $this->belongsTo( \App\user::class,  'users_id', 'id');
    }

}
