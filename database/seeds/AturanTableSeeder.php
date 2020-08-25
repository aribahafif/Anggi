<?php

use App\Aturan;
use Illuminate\Database\Seeder;

class AturanTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('aturan')->delete();

        $aturan = [
            ['kode' => 'A-1','id_penyakit' => '1','gejala' => '["1","2","3","4","5"]','created_at' => date('Y-m-d H:i:s'),'updated_at' => date('Y-m-d H:i:s'),],
            ['kode' => 'A-2','id_penyakit' => '1','gejala' => '["1","2","3","4"]','created_at' => date('Y-m-d H:i:s'),'updated_at' => date('Y-m-d H:i:s'),],
            ['kode' => 'A-3','id_penyakit' => '2','gejala' => '["6","7","8","9","10"]','created_at' => date('Y-m-d H:i:s'),'updated_at' => date('Y-m-d H:i:s'),],
            ['kode' => 'A-4','id_penyakit' => '2','gejala' => '["6","7","8","9"]','created_at' => date('Y-m-d H:i:s'),'updated_at' => date('Y-m-d H:i:s'),],
            ['kode' => 'A-5','id_penyakit' => '3','gejala' => '["11","12","13"]','created_at' => date('Y-m-d H:i:s'),'updated_at' => date('Y-m-d H:i:s'),],
            ['kode' => 'A-6','id_penyakit' => '4','gejala' => '["13","14","15","16"]','created_at' => date('Y-m-d H:i:s'),'updated_at' => date('Y-m-d H:i:s'),],
            ['kode' => 'A-7','id_penyakit' => '5','gejala' => '["17","18","19","20"]','created_at' => date('Y-m-d H:i:s'),'updated_at' => date('Y-m-d H:i:s'),],
            ['kode' => 'A-8','id_penyakit' => '5','gejala' => '["1","13","17","18","19","21"]','created_at' => date('Y-m-d H:i:s'),'updated_at' => date('Y-m-d H:i:s'),],
            ['kode' => 'A-9','id_penyakit' => '5','gejala' => '["1","13","17","18","19","20","21"]','created_at' => date('Y-m-d H:i:s'),'updated_at' => date('Y-m-d H:i:s'),],
            ['kode' => 'A-10','id_penyakit' => '6','gejala' => '["20","22","23","24","25"]','created_at' => date('Y-m-d H:i:s'),'updated_at' => date('Y-m-d H:i:s'),],
            ['kode' => 'A-11','id_penyakit' => '6','gejala' => '["20","22","23","24"]','created_at' => date('Y-m-d H:i:s'),'updated_at' => date('Y-m-d H:i:s'),],
            ['kode' => 'A-12','id_penyakit' => '7','gejala' => '["13","16","17","18","26","27"]','created_at' => date('Y-m-d H:i:s'),'updated_at' => date('Y-m-d H:i:s'),],
            ['kode' => 'A-13','id_penyakit' => '7','gejala' => '["13","16","17","18","26"]','created_at' => date('Y-m-d H:i:s'),'updated_at' => date('Y-m-d H:i:s'),],
            ['kode' => 'A-14','id_penyakit' => '8','gejala' => '["18","21","28","29","30"]','created_at' => date('Y-m-d H:i:s'),'updated_at' => date('Y-m-d H:i:s'),],
            ['kode' => 'A-15','id_penyakit' => '8','gejala' => '["18","21","28","29"]','created_at' => date('Y-m-d H:i:s'),'updated_at' => date('Y-m-d H:i:s'),],
            ['kode' => 'A-16','id_penyakit' => '9','gejala' => '["13","17","21","31"]','created_at' => date('Y-m-d H:i:s'),'updated_at' => date('Y-m-d H:i:s'),],
            ['kode' => 'A-17','id_penyakit' => '10','gejala' => '["13","14","15","32"]','created_at' => date('Y-m-d H:i:s'),'updated_at' => date('Y-m-d H:i:s'),],
            ['kode' => 'A-18','id_penyakit' => '10','gejala' => '["14","15","32"]','created_at' => date('Y-m-d H:i:s'),'updated_at' => date('Y-m-d H:i:s'),],
        ];

        Aturan::insert($aturan);
    }
}
