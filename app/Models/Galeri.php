<?php

namespace App\Models;

use App\Models\Galeri;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Galeri extends Model
{
    protected $table='galeri';

    protected $fillable=
    [
       'id','judul','isi','users_id','kategori_galeri_id'
    ];
    public function Kategorigaleris(){
        return $this->belongsTo( \App\Models\kategorigaleri::class,  'kategori_galeri_id','id');
    }
    public function user(){
        return $this->belongsTo( \App\Models\user::class,  'users_id','id' );
    }
    use HasFactory;
}
