<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $this->call(UsersTableSeeder::class);
        $this->call(PersentasesTableSeeder::class);
        $this->call(HarisTableSeeder::class);
        $this->call(JamsTableSeeder::class);
        $this->call(ProfilesTableSeeder::class);
        $this->call(SejarahsTableSeeder::class);
        $this->call(VisiMisisTableSeeder::class);
        $this->call(PenerimaansTableSeeder::class);
        $this->call(TahunAjaransTableSeeder::class);
        $this->call(MatapelajaransTableSeeder::class);
    }
}
