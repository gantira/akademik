<?php

use Illuminate\Database\Seeder;

class MatapelajaransTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::statement('SET FOREIGN_KEY_CHECKS=0;');
		DB::table('matapelajarans')->truncate();
		DB::statement('SET FOREIGN_KEY_CHECKS=1;');

        App\Matapelajaran::insert(
            array([
                'nama_matapelajaran' => 'BP/BK',
                'kkm' => 75,
                'semester' => 'I',
                'tahunajaran_id' => 1
            ],
			[	
				'nama_matapelajaran' => 'Biologi',
				'kkm' => 75,
				'semester' => 'I',
				'tahunajaran_id' => 1
			],
			[			
				'nama_matapelajaran' => 'Biologi Pendalaman',
				'kkm' => 75,
				'semester' => 'I',
				'tahunajaran_id' => 1
			],
			[	
				'nama_matapelajaran' => 'Seni Budaya',
				'kkm' => 75,
				'semester' => 'I',
				'tahunajaran_id' => 1
			],
			[	
				'nama_matapelajaran' => 'PLH',
				'kkm' => 75,
				'semester' => 'I',
				'tahunajaran_id' => 1
			],
			[
				'nama_matapelajaran' => 'Kimia',
				'kkm' => 75,
				'semester' => 'I',
				'tahunajaran_id' => 1
			],
			[
				'nama_matapelajaran' => 'PAI',
				'kkm' => 75,
				'semester' => 'I',
				'tahunajaran_id' => 1
			],
            [
                'nama_matapelajaran' => 'B.Indonesia',
                'kkm' => 75,
                'semester' => 'I',
                'tahunajaran_id' => 1
            ],
			[
				'nama_matapelajaran' => 'BKWU',
				'kkm' => 75,
				'semester' => 'I',
				'tahunajaran_id' => 1
			],
			[	
				'nama_matapelajaran' => 'B.inggris Pendalaman',
				'kkm' => 75,
				'semester' => 'I',
				'tahunajaran_id' => 1
			],
			[
				'nama_matapelajaran' => 'PKN',
				'kkm' => 75,
				'semester' => 'I',
				'tahunajaran_id' => 1
			],
			[
				'nama_matapelajaran' => 'Ekonomi',
				'kkm' => 75,
				'semester' => 'I',
				'tahunajaran_id' => 1
			],
			[
				'nama_matapelajaran' => 'Ekonomi Pendalaman',
				'kkm' => 75,
				'semester' => 'I',
				'tahunajaran_id' => 1
			],
			[
				'nama_matapelajaran' => 'B.Sunda',
				'kkm' => 75,
				'semester' => 'I',
				'tahunajaran_id' => 1
			],
			[
				'nama_matapelajaran' => 'Matematika',
				'kkm' => 75,
				'semester' => 'I',
				'tahunajaran_id' => 1
			],
			[
				'nama_matapelajaran' => 'Sejarah Indonesia',
				'kkm' => 75,
				'semester' => 'I',
				'tahunajaran_id' => 1
			],
            [
                'nama_matapelajaran' => 'Sejarah',
                'kkm' => 75,
                'semester' => 'I',
                'tahunajaran_id' => 1
            ],
			[	
				'nama_matapelajaran' => 'Fisika',
				'kkm' => 75,
				'semester' => 'I',
				'tahunajaran_id' => 1
			],
			[
				'nama_matapelajaran' => 'Penjaskes',
				'kkm' => 75,
				'semester' => 'I',
				'tahunajaran_id' => 1
			],
			[
				'nama_matapelajaran' => 'Geografi',
				'kkm' => 75,
				'semester' => 'I',
				'tahunajaran_id' => 1
			],
			[
				'nama_matapelajaran' => 'Geografi Pendalaman',
				'kkm' => 75,
				'semester' => 'I',
				'tahunajaran_id' => 1
			],
			[
				'nama_matapelajaran' => 'Matematika (Peminatan)',
				'kkm' => 75,
				'semester' => 'I',
				'tahunajaran_id' => 1
			],
            [
                'nama_matapelajaran' => 'B.inggris',
                'kkm' => 75,
                'semester' => 'I',
                'tahunajaran_id' => 1
            ],
			[
				'nama_matapelajaran' => 'B.Jepang',
				'kkm' => 75,
				'semester' => 'I',
				'tahunajaran_id' => 1
			],
			[
				'nama_matapelajaran' => 'Senibudaya',
				'kkm' => 75,
				'semester' => 'I',
				'tahunajaran_id' => 1
			],
            [
                'nama_matapelajaran' => 'Sosiologi',
                'kkm' => 75,
                'semester' => 'I',
                'tahunajaran_id' => 1
            ],
			[	
				'nama_matapelajaran' => 'Sosiologi (lintas Minat )',
				'kkm' => 75,
				'semester' => 'I',
				'tahunajaran_id' => 1
			],
			[
				'nama_matapelajaran' => 'TIK',
				'kkm' => 75,
				'semester' => 'I',
				'tahunajaran_id' => 1
			])

        );
    }
}
