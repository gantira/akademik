<?php

use Illuminate\Database\Seeder;

class VisiMisisTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('visimisis')->truncate();
        
        DB::table('visimisis')->insert(array([
                'judul' => 'Visi dan Misi Sekolah - SMA Puragabaya',
                'content' => '<p><strong>Visi </strong></p>

				<p>Terwujudnya generasi berkualitas yang beraqidah Ahlussunnah Wal Jama&#39;ah serta memiliki keimanan yang kokoh, keluasan ilmu pengetahuan, dan berakhlaqul karimah.</p>

				<p><strong>Misi </strong></p>

				<ol>
				    <li>Menyelenggarakan pendidikan Islam yang berkualitas dan berciri khas Islam Ahlus Sunnah Wal Jama&rsquo;ah.</li>
				    <li>Menanamkan nilai-nilai islam <em>rahmatan lil &lsquo;alamiin</em> melalui <em>ta&rsquo;lim, tarbiyah</em> dan <em>ta&rsquo;dib</em> berlandaskan Al-Qur&rsquo;an dan As-Sunnah dalam praktik kehidupan.</li>
				    <li>Memberikan pelayanan pendidikan yang relevan terhadap perkembangan masyarakat melalui pemenuhan standar jaminan mutu (<em>quality assurance</em>) yang baik.</li>
				</ol>
				',
        ]

        ));
    }
}
