<?php

use Illuminate\Database\Seeder;

class SejarahsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('sejarahs')->truncate();
        
        DB::table('sejarahs')->insert(array([
                'judul' => 'Sejarah Sekolah - SMA Puragabaya',
                'content' => '<p>Munculnya media internet akan sangat memudahkan dalam pembelajaran sesuatu yang baru, karena dengan mengakses segala informasi yang ada di internet akan menambah pengetahuan kita. Pencarian-pencarian informasi dapat dilakukan melalui media pencarian search engine. Banyak sekali media internet yaitu situs-situs yang memberi fasilitas ini misalnya Google, Yahoo dan web hosting sejenisnya. Media pencarian ini akan lebih mudah mendapatkan informasi yang kita inginkan, tidak hanya untuk pencarian situs tetapi dapat juga mencari file-file yang ekstensinya dapat di upload atau di download.</p>
                <p>SMA Puragabaya merupakan Sekolah Menengah Atas berbasis kompetensi kader bangsa yang berorientasi ke depan dalam membangun bangsa dengan keunggulan mengoptimalkan bakat para siswa terutama dalam bidang tekhnologi, seni dan olahraga. Setiap tahunnya SMA Puragabaya meluluskan ribuan siswa menyiapkan ketrampilan bagi tamatan sekolah dalam rangka meneruskan kejenjang keperguruan tinggi atau hidup bermasyarakat.</p>
                <p>Kelemahan di SMA Puragabaya dalam hal menyajikan sistem informasi sekolah</p>
',
        ]

        ));
    }
}

