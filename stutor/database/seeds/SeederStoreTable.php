<?php

use App\Store;
use Illuminate\Database\Seeder;

class SeederStoreTable extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
         $sectionRecord=[
             ['id'=>1,'cours_name'=>"Matric",'subject_name'=>"Matric" ,"status"=>0 ,"user_id"=>1],
            ['id' => 2,'cours_name'=>"BSCS", 'subject_name'=>"Matric","status" => 0,"user_id"=>3],
            ['id' => 3, 'cours_name' => "Mechanical", 'subject_name'=>"Matric","status" => 0,"user_id"=>1],
    ];
    Store::insert($sectionRecord);
    }
}
