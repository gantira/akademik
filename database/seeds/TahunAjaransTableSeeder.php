<?php

use Illuminate\Database\Seeder;

class TahunAjaransTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::statement('SET FOREIGN_KEY_CHECKS=0;');
		DB::table('tahunajarans')->truncate();
		DB::statement('SET FOREIGN_KEY_CHECKS=1;');

        App\TahunAjaran::create([
        	'tahunajaran' => 2017
        ]);
    }
}
