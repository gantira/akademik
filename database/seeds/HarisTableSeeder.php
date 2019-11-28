<?php

use Illuminate\Database\Seeder;

class HarisTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    	DB::statement('SET FOREIGN_KEY_CHECKS=0;');
		DB::table('haris')->truncate();
		DB::statement('SET FOREIGN_KEY_CHECKS=1;');

        App\Hari::insert(
        	array(
        		[
	        		'hari' => 'Senin'
	        	],
	        	[
	        		'hari' => 'Selasa'
	        	],
	        	[
	        		'hari' => 'Rabu'
	        	],
	        	[
	        		'hari' => 'Kamis'
	        	],
	        	[
	        		'hari' => 'Jumat'
	        	],
	        	[
	        		'hari' => 'Sabtu'
        	])

        );
    }
}
