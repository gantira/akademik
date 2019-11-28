<?php

use Illuminate\Database\Seeder;

class PersentasesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        App\Persentase::truncate();
        App\Persentase::create([
        	'quiz' => 15,
        	'uts' => 20,
        	'tugas' => 25,
        	'uas' => 40
        ]);
    }
}
