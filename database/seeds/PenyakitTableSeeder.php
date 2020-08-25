<?php

use App\Penyakit;
use Illuminate\Database\Seeder;

class PenyakitTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('penyakit')->delete();

        $penyakit = [
            ['kode' => 'P-1','name' => 'Laringomalacia','description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua','created_at' => date('Y-m-d H:i:s'),'updated_at' => date('Y-m-d H:i:s'),],
            ['kode' => 'P-2','name' => 'Deaf Childern (Tuli Kongenital)','description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua','created_at' => date('Y-m-d H:i:s'),'updated_at' => date('Y-m-d H:i:s'),],
            ['kode' => 'P-3','name' => 'Corpus Alineum Hidung','description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua','created_at' => date('Y-m-d H:i:s'),'updated_at' => date('Y-m-d H:i:s'),],
            ['kode' => 'P-4','name' => 'Corpus Alineum Telinga','description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua','created_at' => date('Y-m-d H:i:s'),'updated_at' => date('Y-m-d H:i:s'),],
            ['kode' => 'P-5','name' => 'Tonsilitis','description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua','created_at' => date('Y-m-d H:i:s'),'updated_at' => date('Y-m-d H:i:s'),],
            ['kode' => 'P-6','name' => 'Hipertrofi Adenoid','description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua','created_at' => date('Y-m-d H:i:s'),'updated_at' => date('Y-m-d H:i:s'),],
            ['kode' => 'P-7','name' => 'Otitis Media Akut','description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua','created_at' => date('Y-m-d H:i:s'),'updated_at' => date('Y-m-d H:i:s'),],
            ['kode' => 'P-8','name' => 'Rinitis Alergi','description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua','created_at' => date('Y-m-d H:i:s'),'updated_at' => date('Y-m-d H:i:s'),],
            ['kode' => 'P-9','name' => 'Faringitis','description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua','created_at' => date('Y-m-d H:i:s'),'updated_at' => date('Y-m-d H:i:s'),],
            ['kode' => 'P-10','name' => 'Serumen','description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua','created_at' => date('Y-m-d H:i:s'),'updated_at' => date('Y-m-d H:i:s'),],
        ];

        Penyakit::insert($penyakit);
    }
}
