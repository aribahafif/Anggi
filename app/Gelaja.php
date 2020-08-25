<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Gejala extends Model
{
    protected $table = "gejala";

    protected $fillable = [
        'id','kode','name'
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
        return $this->hasMany(BasisPengetahuan::class, 'id_gejala');
    }
}