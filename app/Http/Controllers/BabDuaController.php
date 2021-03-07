<?php

namespace App\Http\Controllers;
use App\models\Pengumuman;
use Illuminate\Http\Request;

class BabDuaController extends Controller
{
    public function a5(){
        $pengumumans=Pengumuman::where('id',10)->whereHas('user',function($query){
            $query->whereHas('galeris',function ($query){
                $query->whereHas('kategoriGaleris',function ($query){
                    $query->where('nama','like','Aut%' );
                });
            });
        })->with('user.galeris.kategoriGaleri')->get();

        return $pengumumans;
    }
    public function a6(){
        $pengumumans=Pengumuman::whereHas('user',function($q){
            $q->whereHas('galeris')->orHas('beritas');
                
    
        })->count();

        return $pengumumans;
    }
       
}
