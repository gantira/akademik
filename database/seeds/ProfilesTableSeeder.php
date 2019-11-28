<?php

use Illuminate\Database\Seeder;

class ProfilesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('profiles')->truncate();
        
        DB::table('profiles')->insert(array([
                'judul' => 'Profile Sekolah - SMA Puragabaya',
                'content' => '<p>SMA Puragabaya merupakan Sekolah Menengah Atas berbasis kompetensi kader bangsa yang berorientasi ke depan dalam membangun bangsa dengan keunggulan mengoptimalkan bakat para siswa terutama dalam bidang tekhnologi, seni dan olahraga. Setiap tahunnya SMA Puragabaya meluluskan ribuan siswa menyiapkan ketrampilan bagi tamatan sekolah dalam rangka meneruskan kejenjang keperguruan tinggi atau hidup bermasyarakat.</p>
                <p>Kelemahan di SMA Puragabaya dalam hal menyajikan sistem informasi sekolah dan memonitoring kegiatan siswa masih sederhana, Sistem yang digunakan belum bisa langsung sampai pada Wali murid masih kesulitan apakah anaknya benar-benar masuk sekolah, Wali murid juga masih kesulitan untuk memantau daftar nilai anaknya dari hasil kegiatan belajar disekolah.</p>',
        ]

        ));
    }
}
