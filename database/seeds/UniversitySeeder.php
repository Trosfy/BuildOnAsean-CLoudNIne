<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UniversitySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('universities')->insert([
            ['name' => 'Universitas Indonesia', 'details' => 'https://www.ui.ac.id/'],
            ['name' => 'Universitas Airlangga', 'details' => 'https://www.unair.ac.id/'],
            ['name' => 'Institut Pertanian Bogor', 'details' => 'https://ipb.ac.id/'],
            ['name' => 'Universitas Brawijaya', 'details' => 'https://ub.ac.id/'],
            ['name' => 'Institut Teknologi Bandung', 'details' => 'https://www.itb.ac.id/'],
            ['name' => 'Universitas Gadjah Mada', 'details' => 'https://www.ugm.ac.id/'],
            ['name' => 'Universitas Padjadjaran', 'details' => 'https://www.unpad.ac.id/'],
            ['name' => 'Institut Teknologi Sepuluh Nopember', 'details' => 'https://www.its.ac.id/'],
            ['name' => 'Universitas Diponegoro', 'details' => 'https://www.undip.ac.id/'],
        ]); 
    }
}
