<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Diagnosa extends Model
{
    protected $table = "diagnosa";

    protected $fillable = [
        'id','id_penyakit','id_riwayat','cf'
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
    
    public function riwayat(){
		return $this->belongsTo('App\Riwayat', 'id_riwayat');
	}
    
    public function penyakit(){
		return $this->belongsTo('App\Penyakit', 'id_penyakit');
	}
}