<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Penyakit extends Model
{
    protected $table = "penyakit";

    protected $fillable = [
        'id','kode','name','description'
   ];

    public static function rules($update = false, $id = null)
    {
        $commun = [

        ];

        if ($update) {
            return $commun;
        }

        return array_merge($commun, [
        ]);
    }
    
    public function basispengetahuan(){
        return $this->hasMany(BasisPengetahuan::class, 'id_penyakit');
    }
    
    public function aturan(){
        return $this->hasMany(Aturan::class, 'id_penyakit');
    }
    
    public function diagnosa(){
        return $this->hasMany(Diagnosa::class, 'id_penyakit');
    }
}