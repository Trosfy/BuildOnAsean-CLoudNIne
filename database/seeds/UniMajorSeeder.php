<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UniMajorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('uni_majors')->insert([
            // UI
            ['university_id' => 1, 'major_id' => 1, 'budget' => 140000000],
            ['university_id' => 1, 'major_id' => 2, 'budget' => 160000000],
            ['university_id' => 1, 'major_id' => 3, 'budget' => 160000000],
            ['university_id' => 1, 'major_id' => 4, 'budget' => 160000000],
            ['university_id' => 1, 'major_id' => 5, 'budget' => 160000000],

            ['university_id' => 1, 'major_id' => 6, 'budget' => 140000000],
            ['university_id' => 1, 'major_id' => 7, 'budget' => 140000000],
            ['university_id' => 1, 'major_id' => 8, 'budget' => 140000000],
            ['university_id' => 1, 'major_id' => 9, 'budget' => 140000000],
            ['university_id' => 1, 'major_id' => 10, 'budget' => 160000000],

            ['university_id' => 1, 'major_id' => 11, 'budget' => 160000000],
            ['university_id' => 1, 'major_id' => 12, 'budget' => 160000000],
            ['university_id' => 1, 'major_id' => 13, 'budget' => 160000000],
            ['university_id' => 1, 'major_id' => 14, 'budget' => 140000000],
            ['university_id' => 1, 'major_id' => 15, 'budget' => 160000000],

            ['university_id' => 1, 'major_id' => 16, 'budget' => 140000000],
            ['university_id' => 1, 'major_id' => 17, 'budget' => 140000000],
            ['university_id' => 1, 'major_id' => 18, 'budget' => 140000000],
            ['university_id' => 1, 'major_id' => 19, 'budget' => 160000000],
            ['university_id' => 1, 'major_id' => 20, 'budget' => 140000000],

            ['university_id' => 1, 'major_id' => 21, 'budget' => 160000000],
            ['university_id' => 1, 'major_id' => 22, 'budget' => 160000000],
            ['university_id' => 1, 'major_id' => 23, 'budget' => 160000000],
            ['university_id' => 1, 'major_id' => 24, 'budget' => 160000000],
            ['university_id' => 1, 'major_id' => 25, 'budget' => 160000000],

            ['university_id' => 1, 'major_id' => 26, 'budget' => 160000000],
            
            //UNAIR
            ['university_id' => 2, 'major_id' => 1, 'budget' => 105000000],
            ['university_id' => 2, 'major_id' => 2, 'budget' => 94000000],
            ['university_id' => 2, 'major_id' => 3, 'budget' => 60000000],
            ['university_id' => 2, 'major_id' => 4, 'budget' => 81000000],
            ['university_id' => 2, 'major_id' => 7, 'budget' => 105000000],
            
            ['university_id' => 2, 'major_id' => 9, 'budget' => 105000000],
            ['university_id' => 2, 'major_id' => 10, 'budget' => 219000000],
            ['university_id' => 2, 'major_id' => 11, 'budget' => 175000000],
            ['university_id' => 2, 'major_id' => 28, 'budget' => 114000000],
            ['university_id' => 2, 'major_id' => 12, 'budget' => 120000000],

            ['university_id' => 2, 'major_id' => 13, 'budget' => 94000000],
            ['university_id' => 2, 'major_id' => 14, 'budget' => 105000000],
            ['university_id' => 2, 'major_id' => 16, 'budget' => 105000000],
            ['university_id' => 2, 'major_id' => 17, 'budget' => 90000000],
            ['university_id' => 2, 'major_id' => 20, 'budget' => 73000000],

            ['university_id' => 2, 'major_id' => 21, 'budget' => 81000000],

            // IPB
            ['university_id' => 3, 'major_id' => 27, 'budget' => 111000000],
            ['university_id' => 3, 'major_id' => 2, 'budget' => 111000000],
            ['university_id' => 3, 'major_id' => 4, 'budget' => 111000000],
            ['university_id' => 3, 'major_id' => 5, 'budget' => 133000000],
            ['university_id' => 3, 'major_id' => 28, 'budget' => 141000000],

            ['university_id' => 3, 'major_id' => 13, 'budget' => 111000000],
            ['university_id' => 3, 'major_id' => 14, 'budget' => 115000000],
            ['university_id' => 3, 'major_id' => 15, 'budget' => 111000000],
            ['university_id' => 3, 'major_id' => 21, 'budget' => 111000000],
            ['university_id' => 3, 'major_id' => 25, 'budget' => 111000000],

            ['university_id' => 3, 'major_id' => 26, 'budget' => 111000000],
            ['university_id' => 3, 'major_id' => 30, 'budget' => 111000000],
            ['university_id' => 3, 'major_id' => 31, 'budget' => 111000000],

            //UB
            ['university_id' => 4, 'major_id' => 27, 'budget' => 88000000],
            ['university_id' => 4, 'major_id' => 2, 'budget' => 93000000],
            ['university_id' => 4, 'major_id' => 8, 'budget' => 100135000],
            ['university_id' => 4, 'major_id' => 4, 'budget' => 92200000],
            ['university_id' => 4, 'major_id' => 6, 'budget' => 107800000],

            ['university_id' => 4, 'major_id' => 7, 'budget' => 103800000],
            ['university_id' => 4, 'major_id' => 9, 'budget' => 107800000],
            ['university_id' => 4, 'major_id' => 13, 'budget' => 123000000],
            ['university_id' => 4, 'major_id' => 18, 'budget' => 77440000],
            ['university_id' => 4, 'major_id' => 19, 'budget' => 131000000],

            ['university_id' => 4, 'major_id' => 20, 'budget' => 88000000],
            ['university_id' => 4, 'major_id' => 22, 'budget' => 111000000],
            ['university_id' => 4, 'major_id' => 23, 'budget' => 123000000],
            ['university_id' => 4, 'major_id' => 29, 'budget' => 131000000],
            ['university_id' => 4, 'major_id' => 25, 'budget' => 111000000],

            ['university_id' => 4, 'major_id' => 31, 'budget' => 101000000],
            ['university_id' => 4, 'major_id' => 26, 'budget' => 111000000],

            //ITB
            ['university_id' => 5, 'major_id' => 27, 'budget' => 225000000],
            ['university_id' => 5, 'major_id' => 3, 'budget' => 225000000],
            ['university_id' => 5, 'major_id' => 31, 'budget' => 225000000],
            ['university_id' => 5, 'major_id' => 14, 'budget' => 240000000],
            ['university_id' => 5, 'major_id' => 15, 'budget' => 225000000],
            ['university_id' => 5, 'major_id' => 22, 'budget' => 225000000],
            ['university_id' => 5, 'major_id' => 23, 'budget' => 225000000],
            ['university_id' => 5, 'major_id' => 24, 'budget' => 225000000],
            ['university_id' => 5, 'major_id' => 26, 'budget' => 225000000],
            ['university_id' => 5, 'major_id' => 25, 'budget' => 225000000],

            //UGM
            ['university_id' => 6, 'major_id' => 1, 'budget' => 180000000],
            ['university_id' => 6, 'major_id' => 27, 'budget' => 180000000],
            ['university_id' => 6, 'major_id' => 2, 'budget' => 135000000],
            ['university_id' => 6, 'major_id' => 8, 'budget' => 180000000],
            ['university_id' => 6, 'major_id' => 5, 'budget' => 150000000],
            ['university_id' => 6, 'major_id' => 6, 'budget' => 147000000],
            ['university_id' => 6, 'major_id' => 7, 'budget' => 160000000],
            ['university_id' => 6, 'major_id' => 9, 'budget' => 151000000],
            ['university_id' => 6, 'major_id' => 10, 'budget' => 333000000],
            ['university_id' => 6, 'major_id' => 11, 'budget' => 308000000],
            ['university_id' => 6, 'major_id' => 28, 'budget' => 240000000],
            ['university_id' => 6, 'major_id' => 13, 'budget' => 128000000],
            ['university_id' => 6, 'major_id' => 14, 'budget' => 180000000],
            ['university_id' => 6, 'major_id' => 15, 'budget' => 128000000],
            ['university_id' => 6, 'major_id' => 16, 'budget' => 146000000],
            ['university_id' => 6, 'major_id' => 18, 'budget' => 86400000],
            ['university_id' => 6, 'major_id' => 20, 'budget' => 122000000],
            ['university_id' => 6, 'major_id' => 21, 'budget' => 128000000],
            ['university_id' => 6, 'major_id' => 22, 'budget' => 180000000],
            ['university_id' => 6, 'major_id' => 23, 'budget' => 180000000],
            ['university_id' => 6, 'major_id' => 24, 'budget' => 192000000],
            ['university_id' => 6, 'major_id' => 25, 'budget' => 192000000],
            ['university_id' => 6, 'major_id' => 26, 'budget' => 180000000],
            ['university_id' => 6, 'major_id' => 30, 'budget' => 119000000,],
            ['university_id' => 6, 'major_id' => 31, 'budget' => 132000000],

            //UNPAD
            ['university_id' => 7, 'major_id' => 1, 'budget' => 121000000],
            ['university_id' => 7, 'major_id' => 2, 'budget' => 86000000],
            ['university_id' => 7, 'major_id' => 8, 'budget' => 106000000],
            ['university_id' => 7, 'major_id' => 3, 'budget' => 155000000],
            ['university_id' => 7, 'major_id' => 4, 'budget' => 86000000],
            ['university_id' => 7, 'major_id' => 6, 'budget' => 119000000],
            ['university_id' => 7, 'major_id' => 7, 'budget' => 103000000],
            ['university_id' => 7, 'major_id' => 9, 'budget' => 119000000],
            ['university_id' => 7, 'major_id' => 10, 'budget' => 370000000],
            ['university_id' => 7, 'major_id' => 11, 'budget' => 329000000],
            ['university_id' => 7, 'major_id' => 28, 'budget' => 155000000],
            ['university_id' => 7, 'major_id' => 12, 'budget' => 104000000],
            ['university_id' => 7, 'major_id' => 13, 'budget' => 86000000],
            ['university_id' => 7, 'major_id' => 14, 'budget' => 121000000],
            ['university_id' => 7, 'major_id' => 15, 'budget' => 82000000],
            ['university_id' => 7, 'major_id' => 16, 'budget' => 139000000],
            ['university_id' => 7, 'major_id' => 17, 'budget' => 65000000],
            ['university_id' => 7, 'major_id' => 18, 'budget' => 65000000],
            ['university_id' => 7, 'major_id' => 20, 'budget' => 63000000],
            ['university_id' => 7, 'major_id' => 21, 'budget' => 82000000],
            ['university_id' => 7, 'major_id' => 29, 'budget' => 116000000],
            ['university_id' => 7, 'major_id' => 30, 'budget' => 90000000],
            ['university_id' => 7, 'major_id' => 31, 'budget' => 95000000],

            //ITS
            ['university_id' => 8, 'major_id' => 27, 'budget' => 200000000],
            ['university_id' => 8, 'major_id' => 2, 'budget' => 150000000],
            ['university_id' => 8, 'major_id' => 4, 'budget' => 160000000],
            ['university_id' => 8, 'major_id' => 13, 'budget' => 175000000],
            ['university_id' => 8, 'major_id' => 15, 'budget' => 175000000],
            ['university_id' => 8, 'major_id' => 19, 'budget' => 200000000],
            ['university_id' => 8, 'major_id' => 21, 'budget' => 175000000],
            ['university_id' => 8, 'major_id' => 22, 'budget' => 200000000],
            ['university_id' => 8, 'major_id' => 23, 'budget' => 200000000],
            ['university_id' => 8, 'major_id' => 29, 'budget' => 200000000],
            ['university_id' => 8, 'major_id' => 24, 'budget' => 200000000],
            ['university_id' => 8, 'major_id' => 25, 'budget' => 200000000],

            //UNDIP
            ['university_id' => 9, 'major_id' => 8, 'budget' => 81000000],
            ['university_id' => 9, 'major_id' => 4, 'budget' => 94000000],
            ['university_id' => 9, 'major_id' => 5, 'budget' => 122000000],
            ['university_id' => 9, 'major_id' => 7, 'budget' => 101000000],
            ['university_id' => 9, 'major_id' => 9, 'budget' => 81000000],
            ['university_id' => 9, 'major_id' => 11, 'budget' => 310000000],
            ['university_id' => 9, 'major_id' => 14, 'budget' => 100000000],
            ['university_id' => 9, 'major_id' => 21, 'budget' => 94000000],
            ['university_id' => 9, 'major_id' => 29, 'budget' => 113000000],
            ['university_id' => 9, 'major_id' => 24, 'budget' => 121000000],
            ['university_id' => 9, 'major_id' => 26, 'budget' => 121000000],
            ['university_id' => 9, 'major_id' => 31, 'budget' => 90000000],
            ['university_id' => 9, 'major_id' => 12, 'budget' => 116000000]

        ]); 
    }
}
