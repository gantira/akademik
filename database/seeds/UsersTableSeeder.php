<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        App\User::truncate();
        App\User::insert(
            array([
                'name' => 'admin',
                'email' => 'admin',
                'password' => bcrypt('admin'),
                'role' => 'admin',
            ],
            [
                'name' => 'kepsek',
                'email' => 'kepsek',
                'password' => bcrypt('kepsek'),
                'role' => 'kepsek'
            ])

        );
    }
}
