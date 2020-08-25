<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class BasisPengetahuan extends Model
{
    protected $table = "basispengetahuan";

    protected $fillable = [
        'id','kode','mb','md','id_penyakit','id_gejala'
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
    
    public function gejala(){
		return $this->belongsTo('App\Gejala', 'id_gejala');
	}
    
    public function penyakit(){
		return $this->belongsTo('App\Penyakit', 'id_penyakit');
	}
}