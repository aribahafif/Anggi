<?php

use App\Faq;
use Illuminate\Database\Seeder;

class FaqTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('faq')->delete();

        $faq = [
            [
                'question' => 'Bagaimana Cara Melakukan Diagnosa Penyakit THT Pada Balita?',
                    'answer' => 'Diagnosa penyakit dapat dilakukan apabila telah memasukkan gejala minimal 1 gejala atau lebih, dikarenakan untuk mendiagnosa sebuah penyakit dibutuhkan sebuah gejala agar penyakit dapat didiagnosa.',
                    'created_at' => date('Y-m-d H:i:s'),
                    'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'question' => 'Apakah Diagnosa Penyakit Pada Sistem Sudah 100% Benar?',
                'answer' => 'Diagnosa penyakit pada sistem dilakukan dengan perhitungan matematis yang bersumber dari pakar/dokter ahli THT guna melakukan uapaya dini terhadap penyakit tersebut, tetapi akan lebih baik jika melakukan konsultasi ulang bersama dokter ahli THT agar masalah yang anda hadapi dapat ditangani lebih baik.',
                    'created_at' => date('Y-m-d H:i:s'),
                    'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'question' => 'Bagaimana Jika Gejala Yang Anda Rasakan Tidak Terdapat Di Sistem?',
                'answer' => 'Pada saat inihanya terdapat beberapa gejala dan penyakit yang dapat didiagnosa oleh sistem, maka dari itu proses diagnosa penyakit hanya bisa dilakukan jika gejala dan penyakit sudah terdaftar pada sistem.',
                    'created_at' => date('Y-m-d H:i:s'),
                    'updated_at' => date('Y-m-d H:i:s'),
            ],
        ];

        Faq::insert($faq);
    }
}
