<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call([
            users::class,
            GejalaTableSeeder::class,
            PenyakitTableSeeder::class,
            BasisPengetahuanTableSeeder::class,
            AturanTableSeeder::class,
            FaqTableSeeder::class,
        ]);

        if (config('variables.WITH_FAKER')) {
            // FAKE data
        }
    }
}
