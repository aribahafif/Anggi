<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Riwayat extends Model
{
    protected $table = "riwayat";

    protected $fillable = [
        'id','nama','ttl','tb','bb','gejala'
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
    
    public function diagnosa(){
        return $this->hasMany(Diagnosa::class, 'id_riwayat');
    }
}
