<?php

use App\Gejala;
use Illuminate\Database\Seeder;

class GejalaTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('gejala')->delete();

        $gejala = [
            ['kode' => 'G-1','name' => 'Sesak nafas','created_at' => date('Y-m-d H:i:s'),'updated_at' => date('Y-m-d H:i:s'),],
            ['kode' => 'G-2','name' => 'Nafas berbunyi grok-grok (Stridor)','created_at' => date('Y-m-d H:i:s'),'updated_at' => date('Y-m-d H:i:s'),],
            ['kode' => 'G-3','name' => 'Dinding dada tertarik kedalam (Retraksi)','created_at' => date('Y-m-d H:i:s'),'updated_at' => date('Y-m-d H:i:s'),],
            ['kode' => 'G-4','name' => 'Sering tersedak','created_at' => date('Y-m-d H:i:s'),'updated_at' => date('Y-m-d H:i:s'),],
            ['kode' => 'G-5','name' => 'Nafas membaik saat berubah posisi','created_at' => date('Y-m-d H:i:s'),'updated_at' => date('Y-m-d H:i:s'),],
            ['kode' => 'G-6','name' => 'Memiliki riwayat tuli','created_at' => date('Y-m-d H:i:s'),'updated_at' => date('Y-m-d H:i:s'),],
            ['kode' => 'G-7','name' => 'Terinfeksi Rubela saat hamil','created_at' => date('Y-m-d H:i:s'),'updated_at' => date('Y-m-d H:i:s'),],
            ['kode' => 'G-8','name' => 'Tidak merespon suara','created_at' => date('Y-m-d H:i:s'),'updated_at' => date('Y-m-d H:i:s'),],
            ['kode' => 'G-9','name' => 'Berat badan lahir kurang dari 2500 gram','created_at' => date('Y-m-d H:i:s'),'updated_at' => date('Y-m-d H:i:s'),],
            ['kode' => 'G-10','name' => 'Terlambat berbicara','created_at' => date('Y-m-d H:i:s'),'updated_at' => date('Y-m-d H:i:s'),],
            ['kode' => 'G-11','name' => 'Hidung tersumbat 1 sisi','created_at' => date('Y-m-d H:i:s'),'updated_at' => date('Y-m-d H:i:s'),],
            ['kode' => 'G-12','name' => 'Ingus berbau 1 sisi','created_at' => date('Y-m-d H:i:s'),'updated_at' => date('Y-m-d H:i:s'),],
            ['kode' => 'G-13','name' => 'Demam','created_at' => date('Y-m-d H:i:s'),'updated_at' => date('Y-m-d H:i:s'),],
            ['kode' => 'G-14','name' => 'Nyeri telinga','created_at' => date('Y-m-d H:i:s'),'updated_at' => date('Y-m-d H:i:s'),],
            ['kode' => 'G-15','name' => 'Respon pendengaran berkurang','created_at' => date('Y-m-d H:i:s'),'updated_at' => date('Y-m-d H:i:s'),],
            ['kode' => 'G-16','name' => 'Keluar cairan dari telinga','created_at' => date('Y-m-d H:i:s'),'updated_at' => date('Y-m-d H:i:s'),],
            ['kode' => 'G-17','name' => 'Batuk','created_at' => date('Y-m-d H:i:s'),'updated_at' => date('Y-m-d H:i:s'),],
            ['kode' => 'G-18','name' => 'Pilek','created_at' => date('Y-m-d H:i:s'),'updated_at' => date('Y-m-d H:i:s'),],
            ['kode' => 'G-19','name' => 'Sakit tenggorokan','created_at' => date('Y-m-d H:i:s'),'updated_at' => date('Y-m-d H:i:s'),],
            ['kode' => 'G-20','name' => 'Tidur mendengkur','created_at' => date('Y-m-d H:i:s'),'updated_at' => date('Y-m-d H:i:s'),],
            ['kode' => 'G-21','name' => 'Nafas berbau tidak sedap','created_at' => date('Y-m-d H:i:s'),'updated_at' => date('Y-m-d H:i:s'),],
            ['kode' => 'G-22','name' => 'Hidung tersumbat','created_at' => date('Y-m-d H:i:s'),'updated_at' => date('Y-m-d H:i:s'),],
            ['kode' => 'G-23','name' => 'Bicara sengau','created_at' => date('Y-m-d H:i:s'),'updated_at' => date('Y-m-d H:i:s'),],
            ['kode' => 'G-24','name' => 'Bernafas lewat mulut','created_at' => date('Y-m-d H:i:s'),'updated_at' => date('Y-m-d H:i:s'),],
            ['kode' => 'G-25','name' => 'Raut muka berubah','created_at' => date('Y-m-d H:i:s'),'updated_at' => date('Y-m-d H:i:s'),],
            ['kode' => 'G-26','name' => 'Sering memegang telinga','created_at' => date('Y-m-d H:i:s'),'updated_at' => date('Y-m-d H:i:s'),],
            ['kode' => 'G-27','name' => 'Rewel berkurang saat cairan keluar dari telinga','created_at' => date('Y-m-d H:i:s'),'updated_at' => date('Y-m-d H:i:s'),],
            ['kode' => 'G-28','name' => 'Bersin-bersin','created_at' => date('Y-m-d H:i:s'),'updated_at' => date('Y-m-d H:i:s'),],
            ['kode' => 'G-29','name' => 'Pusing','created_at' => date('Y-m-d H:i:s'),'updated_at' => date('Y-m-d H:i:s'),],
            ['kode' => 'G-30','name' => 'Hidung gatal','created_at' => date('Y-m-d H:i:s'),'updated_at' => date('Y-m-d H:i:s'),],
            ['kode' => 'G-31','name' => 'Nyeri tenggorokan','created_at' => date('Y-m-d H:i:s'),'updated_at' => date('Y-m-d H:i:s'),],
            ['kode' => 'G-32','name' => 'Telinga terasa penuh','created_at' => date('Y-m-d H:i:s'),'updated_at' => date('Y-m-d H:i:s'),],
        ];

        Gejala::insert($gejala);
    }
}
