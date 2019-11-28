<?php

use Illuminate\Database\Seeder;

class JamsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::statement('SET FOREIGN_KEY_CHECKS=0;');
		DB::table('jams')->truncate();
		DB::statement('SET FOREIGN_KEY_CHECKS=1;');

        App\Jam::insert(
        	array(
        		[
	        		'jam' => '07.00-07.40'
	        	],
	        	[
	        		'jam' => '07.40-08.15'
	        	],
	        	[
	        		'jam' => '08.15-09.15'
	        	],
	        	[
	        		'jam' => '09.15-09.40'
	        	],
	        	[
	        		'jam' => '09.40-10.10'
	        	],
	        	[
	        		'jam' => '10.10-10.50'
	        	],
	        	[
	        		'jam' => '10.50-11.30'
	        	],
	        	[
	        		'jam' => '11.30-12.10'
        		],
        		[
	        		'jam' => '12.10-12.30'
        		],
	        	[
	        		'jam' => '12.30-13.10'
	        	],
	        	[
	        		'jam' => '13.45-14.30'
	        	],
	        	[
	        		'jam' => '14.30-15.15'
        		])

        );
    }
}
