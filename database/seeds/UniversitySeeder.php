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
            ['name' => 'Universitas Indonesia', 'details' => 'https://www.ui.ac.id/', 'img' => 'ui.jpeg'],
            ['name' => 'Universitas Airlangga', 'details' => 'https://www.unair.ac.id/', 'img' => 'unair.png'],
            ['name' => 'Institut Pertanian Bogor', 'details' => 'https://ipb.ac.id/', 'img' => 'ipb.jpg'],
            ['name' => 'Universitas Brawijaya', 'details' => 'https://ub.ac.id/', 'img' => 'ub.jpg'],
            ['name' => 'Institut Teknologi Bandung', 'details' => 'https://www.itb.ac.id/', 'img' => 'itb.jpg'],
            ['name' => 'Universitas Gadjah Mada', 'details' => 'https://www.ugm.ac.id/', 'img' => 'ugm.jpg'],
            ['name' => 'Universitas Padjadjaran', 'details' => 'https://www.unpad.ac.id/', 'img' => 'unpad.jpg'],
            ['name' => 'Institut Teknologi Sepuluh Nopember', 'details' => 'https://www.its.ac.id/', 'img' => 'its.jpg'],
            ['name' => 'Universitas Diponegoro', 'details' => 'https://www.undip.ac.id/', 'img' => 'undip.jpg'],
        ]); 
    }
}
