<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class MajorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('majors')->insert([
            ['name' => 'Akuntansi', 'stream-science' => '1', 'stream-social' => '1', 'description' => ''],
            ['name' => 'Biologi', 'stream-science' => '1', 'stream-social' => '0', 'description' => ''],
            ['name' => 'Farmasi', 'stream-science' => '1', 'stream-social' => '0', 'description' => ''],
            ['name' => 'Fisika', 'stream-science' => '1', 'stream-social' => '0', 'description' => ''],
            ['name' => 'Gizi', 'stream-science' => '1', 'stream-social' => '0', 'description' => ''],
            ['name' => 'Hubungan Internasional', 'stream-science' => '1', 'stream-social' => '1', 'description' => ''],
            ['name' => 'Hukum', 'stream-science' => '1', 'stream-social' => '1', 'description' => ''],
            ['name' => 'Ekonomi', 'stream-science' => '1', 'stream-social' => '1', 'description' => ''],
            ['name' => 'Ilmu Komunikasi', 'stream-science' => '1', 'stream-social' => '1', 'description' => ''],
            ['name' => 'Kedokteran', 'stream-science' => '1', 'stream-social' => '0', 'description' => ''],
            ['name' => 'Kedokteran Gigi', 'stream-science' => '1', 'stream-social' => '0', 'description' => ''],
            ['name' => 'Keperawatan', 'stream-science' => '1', 'stream-social' => '0', 'description' => ''],
            ['name' => 'Kimia', 'stream-science' => '1', 'stream-social' => '0', 'description' => ''],
            ['name' => 'Manajemen', 'stream-science' => '1', 'stream-social' => '1', 'description' => ''],
            ['name' => 'Matematika', 'stream-science' => '1', 'stream-social' => '1', 'description' => ''],
            ['name' => 'Psikologi', 'stream-science' => '1', 'stream-social' => '1', 'description' => ''],
            ['name' => 'Sastra Inggris', 'stream-science' => '1', 'stream-social' => '1', 'description' => ''],
            ['name' => 'Sastra Jepang', 'stream-science' => '1', 'stream-social' => '1', 'description' => ''],
            ['name' => 'Sistem Informasi', 'stream-science' => '1', 'stream-social' => '1', 'description' => ''],
            ['name' => 'Sosiologi', 'stream-science' => '1', 'stream-social' => '1', 'description' => ''],
            ['name' => 'Statistika', 'stream-science' => '1', 'stream-social' => '0', 'description' => ''],

            ['name' => 'Teknik Elektro', 'stream-science' => '1', 'stream-social' => '0', 'description' => ''],
            ['name' => 'Teknik Industri', 'stream-science' => '1', 'stream-social' => '0', 'description' => ''],
            ['name' => 'Teknik Kimia', 'stream-science' => '1', 'stream-social' => '0', 'description' => ''],
            ['name' => 'Teknik Mesin', 'stream-science' => '1', 'stream-social' => '0', 'description' => ''],
            ['name' => 'Teknik Sipil', 'stream-science' => '1', 'stream-social' => '0', 'description' => ''],
            ['name' => 'Arsitektur', 'stream-science' => '1', 'stream-social' => '0', 'description' => ''],
            ['name' => 'Kedokteran Hewan', 'stream-science' => '1', 'stream-social' => '0', 'description' => ''],
            ['name' => 'Teknik Informatika', 'stream-science' => '1', 'stream-social' => '0', 'description' => ''],
            ['name' => 'Teknologi Industri Pertanian', 'stream-science' => '1', 'stream-social' => '0', 'description' => ''],
            ['name' => 'Teknologi Pangan', 'stream-science' => '1', 'stream-social' => '0', 'description' => ''],
        ]);
    }
}
