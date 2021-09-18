<?php

use App\Course;
use Illuminate\Database\Seeder;

class SeederCourseTable extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $sectionRecord=[
             ['id'=>1,'name'=>"Men", "status"=>1],
            ['id' => 2,'name'=>"Women", "status" => 1],
            ['id' => 3, 'name' => "Kids", "status" => 1],
    ];
    Course::insert($sectionRecord);
    }

}
