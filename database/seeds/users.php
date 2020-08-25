<?php

use App\User;
use Illuminate\Database\Seeder;

class users extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->delete();

        $data = [
            [
                'name'     => 'Administrator',
                'email'    => 'admin@admin.com',
                'password' => bcrypt('admin'),
                'role'     => 10,
            ],
        ];

        User::insert($data);
    }
}
