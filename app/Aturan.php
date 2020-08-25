<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Aturan extends Model
{
    protected $table = "aturan";

    protected $fillable = [
        'id','kode','id_penyakit','gejala'
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

    
    public function penyakit(){
		return $this->belongsTo('App\Penyakit', 'id_penyakit');
	}
}