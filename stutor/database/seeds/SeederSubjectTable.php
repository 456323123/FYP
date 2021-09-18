<?php
use App\Subject;
use Illuminate\Database\Seeder;

class SeederSubjectTable extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $sectionRecord=[
             ['id'=>1,'coursename'=>"Maths",'subject_name'=>"Matric"  ,"user_id"=>1],
            ['id' => 2,'coursename'=>"English", 'subject_name'=>"Matric","user_id"=>3],
            ['id' => 3, 'coursename' => "ITC", 'subject_name'=>"BSCS","user_id"=>1],
    ];
    Subject::insert($sectionRecord);
    }
}
