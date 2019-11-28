<?php

use Illuminate\Database\Seeder;

class PenerimaansTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        App\SettingPenerimaan::truncate();
        App\SettingPenerimaan::create([
            'jumlah_penerimaan' => 0,
        	'nilai_kelulusan' => 0
        ]);
    }
}
