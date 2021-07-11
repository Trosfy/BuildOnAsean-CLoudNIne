<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class RiasecSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Quiz obtained from: https://www.hawaiipublicschools.org/DOE%20Forms/CTE/RIASEC.pdf
        DB::table('riasec_questions')->insert([
            ['question' => 'I like to work on cars', 'code' => 'R'],
            ['question' => 'I like to do puzzles', 'code' => 'I'],
            ['question' => 'I am good at working independently', 'code' => 'A'],
            ['question' => 'I like to work in teams', 'code' => 'S'],
            ['question' => 'I am an ambitious person, I set goals for myself', 'code' => 'E'],
            ['question' => 'I like to organize things, (files, desks/offices)
            ', 'code' => 'C'],
            ['question' => 'I like to build things', 'code' => 'R'],
            ['question' => 'I like to read about art and music', 'code' => 'A'],
            ['question' => 'I like to have clear instructions
            to follow', 'code' => 'C'],
            ['question' => 'I like to try to influence or persuade people', 'code' => 'E'],

            ['question' => 'I like to do experiments', 'code' => 'I'],
            ['question' => 'I like to teach or train people', 'code' => 'S'],['question' => 'I like trying to help people solve
            their problems', 'code' => 'S'],['question' => 'I like to take care of animals', 'code' => 'R'],['question' => 'I wouldn’t mind working 8 hours per day in an office', 'code' => 'C'],['question' => 'I like selling things', 'code' => 'E'],
            ['question' => 'I enjoy creative writing', 'code' => 'A'],
            ['question' => 'I enjoy science', 'code' => 'I'],
            ['question' => 'I am quick to take on new responsibilities', 'code' => 'E'],
            ['question' => 'I am interested in healing people', 'code' => 'S'],['question' => 'I enjoy trying to figure out how things work', 'code' => 'I'],

            ['question' => 'I like putting things together or
            assembling things', 'code' => 'R'],
            ['question' => 'I am a creative person', 'code' => 'A'],
            ['question' => 'I pay attention to details', 'code' => 'C'],
            ['question' => 'I like to do filing or typing', 'code' => 'C'],
            ['question' => 'I like to analyze things (problems/situations)', 'code' => 'I'],
            ['question' => 'I like to play instruments or sing', 'code' => 'A'],
            ['question' => 'I enjoy learning about other
            cultures', 'code' => 'S'],
            ['question' => 'I would like to start my own
            business', 'code' => 'E'],
            ['question' => 'I like to cook', 'code' => 'R'],

            ['question' => 'I like acting in plays', 'code' => 'A'],
            ['question' => 'I am a practical person', 'code' => 'R'],
            ['question' => '. I like working with numbers or charts', 'code' => 'I'],
            ['question' => 'I like to get into discussions about issues', 'code' => 'S'],
            ['question' => 'I am good at keeping records of my work', 'code' => 'C'],
            ['question' => 'I like to lead
            ', 'code' => 'E'],
            ['question' => 'I like working outdoors', 'code' => 'R'],
            ['question' => 'I would like to work in an office', 'code' => 'C'],
            ['question' => '’m good at math', 'code' => 'I'],
            ['question' => 'I like helping people', 'code' => 'S'],

            ['question' => 'I like to draw', 'code' => 'A'],
            ['question' => 'I like to give speeches', 'code' => 'E'],
        ]);
    }
}
