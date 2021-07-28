<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CareerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('careers')->insert([
            ['jobtitle' => 'Human Resource Manager', 'major_id' => 14, 'jurusansma' => 'IPA IPS', 'r' => 0, 'i' => 0, 'a' => 0, 's' => 1, 'e' => 1, 'c' => 1, "Overview" => "Overview", "Jobdesc" => "Jobdesc", "Basicskill" => "Basicskill", "Socialskill" => "Socialskill", "Peopleskill" => "Peopleskill", "Personality" => "Personality"], 
            ['jobtitle' => 'Human Resource Manager', 'major_id' => 20, 'jurusansma' => 'IPA IPS', 'r' => 0, 'i' => 0, 'a' => 0, 's' => 1, 'e' => 1, 'c' => 1, "Overview" => "Overview", "Jobdesc" => "Jobdesc", "Basicskill" => "Basicskill", "Socialskill" => "Socialskill", "Peopleskill" => "Peopleskill", "Personality" => "Personality"],
            ['jobtitle' => 'Psychologist', 'major_id' => 16, 'jurusansma' => 'IPA', 'r' => 0, 'i' => 0, 'a' => 0, 's' => 1, 'e' => 0, 'c' => 0, "Overview" => "Overview", "Jobdesc" => "Jobdesc", "Basicskill" => "Basicskill", "Socialskill" => "Socialskill", "Peopleskill" => "Peopleskill", "Personality" => "Personality"],
            ['jobtitle' => 'Dentist', 'major_id' => 11, 'jurusansma' => 'IPA', 'r' => 1, 'i' => 1, 'a' => 0, 's' => 1, 'e' => 0, 'c' => 0, "Overview" => "Overview", "Jobdesc" => "Jobdesc", "Basicskill" => "Basicskill", "Socialskill" => "Socialskill", "Peopleskill" => "Peopleskill", "Personality" => "Personality"],
            ['jobtitle' => 'Doctor', 'major_id' => 10, 'jurusansma' => 'IPA', 'r' => 0, 'i' => 1, 'a' => 0, 's' => 1, 'e' => 0, 'c' => 0, "Overview" => "Overview", "Jobdesc" => "Jobdesc", "Basicskill" => "Basicskill", "Socialskill" => "Socialskill", "Peopleskill" => "Peopleskill", "Personality" => "Personality"],
            ['jobtitle' => 'Counselor', 'major_id' => 16, 'jurusansma' => 'IPA', 'r' => 0, 'i' => 0, 'a' => 0, 's' => 1, 'e' => 0, 'c' => 0, "Overview" => "Overview", "Jobdesc" => "Jobdesc", "Basicskill" => "Basicskill", "Socialskill" => "Socialskill", "Peopleskill" => "Peopleskill", "Personality" => "Personality"],
            ['jobtitle' => 'Lawyer', 'major_id' => 7, 'jurusansma' => 'IPA', 'r' => 0, 'i' => 0, 'a' => 0, 's' => 1, 'e' => 0, 'c' => 0, "Overview" => "Overview", "Jobdesc" => "Jobdesc", "Basicskill" => "Basicskill", "Socialskill" => "Socialskill", "Peopleskill" => "Peopleskill", "Personality" => "Personality"],
            ['jobtitle' => 'Nurse', 'major_id' => 12, 'jurusansma' => 'IPA', 'r' => 1, 'i' => 0, 'a' => 0, 's' => 1, 'e' => 0, 'c' => 1, "Overview" => "Overview", "Jobdesc" => "Jobdesc", "Basicskill" => "Basicskill", "Socialskill" => "Socialskill", "Peopleskill" => "Peopleskill", "Personality" => "Personality"],
        ]);
    }
}
